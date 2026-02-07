<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
        h1 { font-size: 18px; color: #150d45; }
        .field { margin-bottom: 16px; }
        .label { font-weight: bold; color: #555; }
        .message { background: #f5f5f5; padding: 16px; border-radius: 8px; white-space: pre-wrap; }
    </style>
</head>
<body>
    <h1>Nouveau message reçu depuis le site ProxyDoc</h1>

    <div class="field">
        <span class="label">Nom :</span><br>
        {{ $contact->name }}
    </div>

    <div class="field">
        <span class="label">Email :</span><br>
        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
    </div>

    @if($contact->phone)
    <div class="field">
        <span class="label">Téléphone :</span><br>
        <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
    </div>
    @endif

    <div class="field">
        <span class="label">Message :</span><br>
        <div class="message">{{ $contact->message }}</div>
    </div>

    <p style="margin-top: 24px; font-size: 12px; color: #888;">
        Envoyé depuis le formulaire de contact le {{ $contact->created_at->translatedFormat('d/m/Y à H:i') }}.
    </p>
</body>
</html>
