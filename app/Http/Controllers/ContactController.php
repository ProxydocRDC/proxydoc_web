<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceivedMail;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Affiche la page contact.
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Enregistre un message de contact (appelé en AJAX par le formulaire).
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email n\'est pas valide.',
            'message.required' => 'Le message est obligatoire.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Veuillez corriger les erreurs du formulaire.',
            ], 422);
        }

        $contact = Contact::create($validator->validated());

        $to = config('contact.notification_email', 'contact@proxydoc.org');
        try {
            Mail::mailer(config('mail.default'))->to($to)->send(new ContactReceivedMail($contact));
        } catch (\Throwable $e) {
            report($e);
            if (config('app.debug')) {
                return response()->json([
                    'success' => false,
                    'message' => 'Message enregistré mais l’envoi de l’email a échoué : ' . $e->getMessage(),
                ], 500);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Votre message a bien été envoyé. Nous vous recontacterons rapidement.',
        ]);
    }
}
