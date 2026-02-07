<?php

return [

    /*
    |--------------------------------------------------------------------------
    | App Store (iOS)
    |--------------------------------------------------------------------------
    */
    'app_store' => [
        'app_id' => env('APP_STORE_APP_ID', '6752807730'),
        'country' => env('APP_STORE_COUNTRY', 'fr'),
        'cache_ttl_minutes' => 60,
    ],

    /*
    |--------------------------------------------------------------------------
    | Google Play Store
    |--------------------------------------------------------------------------
    | Les avis Play Store peuvent être récupérés via l'API Google Play Developer
    | (compte développeur requis). En attendant, vous pouvez ajouter des avis
    | manuellement ci-dessous pour qu'ils s'affichent dans le carousel.
    */
    'play_store' => [
        'package_name' => env('PLAY_STORE_PACKAGE', 'org.proxydoc.mobileapp'),
        'reviews' => [
            // Ajoutez ici des avis copiés depuis Play Store pour qu'ils s'affichent dans le carousel.
            // Exemple : ['author' => 'Jean K.', 'text' => 'App très utile...', 'rating' => 5],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Avis de repli (si moins de 10 avis depuis App Store / Play Store)
    |--------------------------------------------------------------------------
    */
    'fallback' => [
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'ProxyDoc m’a permis de trouver rapidement une pharmacie ouverte près de chez moi. L’application est simple et les informations sont à jour.', 'rating' => 5, 'source' => 'App Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Application pratique pour consulter les pharmacies de garde et les actualités santé. Je recommande.', 'rating' => 5, 'source' => 'Play Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Interface claire, recherche efficace. Bon outil pour la santé au quotidien.', 'rating' => 4, 'source' => 'App Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Très utile pour trouver une pharmacie ou un médecin. Merci à l’équipe ProxyDoc.', 'rating' => 5, 'source' => 'Play Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Simple d’utilisation, ça répond à un vrai besoin. À conseiller autour de soi.', 'rating' => 5, 'source' => 'App Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Application fiable et à jour. Idéale pour les urgences et le suivi santé.', 'rating' => 5, 'source' => 'Play Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Bon concept, bien exécuté. J’utilise régulièrement pour les pharmacies et les articles.', 'rating' => 4, 'source' => 'App Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Pratique au quotidien. Les infos sont pertinentes et le design agréable.', 'rating' => 5, 'source' => 'Play Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Enfin une app qui centralise l’info santé et les pharmacies. Bravo.', 'rating' => 5, 'source' => 'App Store'],
        ['author' => 'Utilisateur ProxyDoc', 'text' => 'Je recommande ProxyDoc à tous ceux qui veulent mieux gérer leur santé au quotidien.', 'rating' => 5, 'source' => 'Play Store'],
    ],

];
