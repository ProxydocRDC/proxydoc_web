@echo off
REM ============================================================
REM  ProxyDoc – Plateforme digitale de services médicaux
REM  README OFFICIEL DU PROJET
REM ============================================================

REM ============================================================
REM  1. PRESENTATION GENERALE
REM ============================================================

ProxyDoc est une plateforme digitale conçue pour améliorer l’accès
aux services pharmaceutiques et médicaux grâce au numérique.

Le projet comprend :
- Une application mobile déjà disponible sur Android et iOS
- Un site web vitrine officiel
- Un panneau d’administration sécurisé

Ce dépôt contient le SITE WEB OFFICIEL ProxyDoc,
développé avec Laravel et Filament côté administration.

REM ============================================================
REM  2. OBJECTIFS DU SITE WEB
REM ============================================================

Le site web ProxyDoc vise à :

- Présenter l’entreprise ProxyDoc
- Expliquer sa vision et sa mission
- Mettre en avant les services proposés
- Publier des articles et contenus médicaux
- Présenter l’équipe
- Rediriger les utilisateurs vers l’application mobile
- Remplacer l’ancienne landing page par un site professionnel

REM ============================================================
REM  3. APPLICATION MOBILE
REM ============================================================

L’application ProxyDoc est disponible sur :

- Google Play Store
- Apple App Store

Le site web permet :
- Le téléchargement de l’application
- La présentation des fonctionnalités clés
- La crédibilisation de la plateforme auprès des utilisateurs

REM ============================================================
REM  4. TECHNOLOGIES UTILISEES
REM ============================================================

Backend & Frontend :
- Laravel
- Blade Templates
- Tailwind CSS
- Vite

Administration :
- Filament Admin Panel

Base de données :
- MySQL ou MariaDB

Autres :
- Heroicons
- API REST interne

REM ============================================================
REM  5. ARCHITECTURE DU PROJET
REM ============================================================

Structure générale :

proxydoc/
│
├── app/
│   ├── Models/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   ├── views/
│   │   ├── frontend/
│   │   │   ├── home.blade.php
│   │   │   ├── about.blade.php
│   │   │   ├── vision.blade.php
│   │   │   ├── team.blade.php
│   │   │   ├── articles.blade.php
│   │   │   └── contact.blade.php
│   │   └── layouts/
│   │       └── app.blade.php
│   │
│   └── css/
│
├── filament/
│   ├── Resources/
│   ├── Pages/
│   └── Widgets/
│
├── routes/
│   ├── web.php
│   └── filament.php
│
├── public/
│   └── assets/
│
├── .env.example
├── composer.json
└── Readme.cmd

REM ============================================================
REM  6. PAGES DU SITE VITRINE
REM ============================================================

Pages publiques disponibles :

- Accueil
  - Présentation rapide
  - Boutons de téléchargement app

- À propos
  - Historique et contexte ProxyDoc

- Vision & Mission
  - Objectifs à court et long terme

- Articles & Actualités
  - Contenus médicaux accessibles au public

- Équipe
  - Membres fondateurs et collaborateurs

- Contact
  - Formulaire
  - Coordonnées
  - Réseaux sociaux

REM ============================================================
REM  7. ADMINISTRATION (FILAMENT)
REM ============================================================

Accès :
/admin

Fonctionnalités :
- Gestion des articles
- Gestion des utilisateurs
- Gestion des pharmacies
- Gestion des produits
- Gestion de l’équipe
- Rôles et permissions
- Paramètres du site

REM ============================================================
REM  8. INSTALLATION LOCALE
REM ============================================================

Prérequis :
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL / MariaDB

Commandes :

git clone https://github.com/your-org/proxydoc.git
cd proxydoc

composer install
npm install
npm run build

copy .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

REM ============================================================
REM  9. VARIABLES D’ENVIRONNEMENT IMPORTANTES
REM ============================================================

APP_NAME=ProxyDoc
APP_ENV=local
APP_URL=http://localhost:8000

DB_DATABASE=proxydoc
DB_USERNAME=root
DB_PASSWORD=

FILESYSTEM_DISK=public

REM ============================================================
REM  10. DEPLOIEMENT
REM ============================================================

- Serveur Linux (Ubuntu recommandé)
- Nginx ou Apache
- SSL (Let’s Encrypt)
- Supervisor pour les jobs Laravel
- Sauvegardes automatiques

REM ============================================================
REM  11. VISION LONG TERME
REM ============================================================

- Synchronisation site et application
- API partenaires
- Tableau de bord analytique
- Extensions e-santé
- Téléconseil et services avancés

REM ============================================================
REM  12. LICENCE
REM ============================================================

Projet propriétaire.
Toute reproduction ou utilisation sans autorisation est interdite.

REM ============================================================
REM  13. CONTACT
REM ============================================================

ProxyDoc
République Démocratique du Congo
Plateforme digitale de santé
Email : support@proxydoc.cd

REM ============================================================
REM  FIN DU FICHIER
REM ============================================================


