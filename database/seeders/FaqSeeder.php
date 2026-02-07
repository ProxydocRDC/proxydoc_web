<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Qu’est-ce que ProxyDoc ?',
                'answer' => 'ProxyDoc est une plateforme digitale de santé qui relie les patients aux pharmacies et aux professionnels de santé. L’application mobile et le site web permettent de trouver des pharmacies partenaires, consulter des articles santé et accéder à des services fiables.',
                'order' => 1,
                'show_download_buttons' => false,
            ],
            [
                'question' => 'L’application est-elle gratuite ?',
                'answer' => 'Oui. L’application ProxyDoc est gratuite pour les particuliers sur Google Play et l’App Store.',
                'order' => 2,
                'show_download_buttons' => true,
            ],
            [
                'question' => 'Comment contacter ProxyDoc ?',
                'answer' => 'Email : <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a> — Téléphone : <a href="tel:+243823235255">+243 823 235 255</a>. Vous pouvez aussi utiliser le formulaire de contact sur ce site. République Démocratique du Congo.',
                'order' => 3,
                'show_download_buttons' => false,
            ],
            [
                'question' => 'ProxyDoc est-il disponible hors RDC ?',
                'answer' => 'ProxyDoc est lancé en RDC avec une vision d’extension en Afrique. L’application peut être téléchargée depuis les stores internationaux.',
                'order' => 4,
                'show_download_buttons' => false,
            ],
            [
                'question' => 'Comment rejoindre en tant que pharmacie partenaire ?',
                'answer' => 'Contactez-nous via le formulaire ou à <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a> avec le sujet « Partenariat pharmacie ». Notre équipe vous présentera les modalités et l’accès au panneau d’administration.',
                'order' => 5,
                'show_download_buttons' => false,
            ],
            [
                'question' => 'Où télécharger l’application ?',
                'answer' => 'Sur Google Play Store (Android) et Apple App Store (iOS). Téléchargez l’application ci-dessous :',
                'order' => 6,
                'show_download_buttons' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                array_merge($faq, ['is_active' => true])
            );
        }
    }
}
