<?php

return [

    'notification_email' => env('CONTACT_NOTIFICATION_EMAIL', 'contact@proxydoc.org'),

    /*
    | Emails additionnels à notifier (équipe, etc.). Séparez par des virgules dans .env.
    | Exemple : CONTACT_NOTIFICATION_EMAILS=team@proxydoc.org,support@proxydoc.org
    */
    'notification_emails' => array_filter(array_map('trim', explode(',', env('CONTACT_NOTIFICATION_EMAILS', '')))),

];
