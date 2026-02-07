<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Politique de confidentialité – ProxyDoc</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Politique de confidentialité ProxyDoc : données collectées, bases légales, conservation, sécurité, droits.">
  <meta property="og:title" content="Politique de confidentialité – ProxyDoc">
  <meta property="og:description" content="Comment ProxyDoc traite vos données personnelles (santé, commandes, paiements).">
  <meta name="theme-color" content="#e01f26">
  <style>
    :root{--c:#e01f26}
    html{scroll-behavior:smooth}
    body{font:16px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,"Helvetica Neue",Arial,sans-serif;color:#0f172a;margin:0}
    header{padding:32px 20px;background:linear-gradient(180deg,rgba(224,31,38,0.12),transparent)}
    main{max-width:980px;margin:auto;padding:24px 20px}
    h1{font-size:clamp(28px,4vw,40px);margin:0 0 6px}
    h2{margin-top:32px}
    h3{margin-top:20px}
    .muted{color:#475569}
    .badge{display:inline-block;background:rgba(224,31,38,0.08);color:#b91c1c;padding:.2rem .45rem;border-radius:999px;font-size:.8rem}
    nav a{color:var(--c);text-decoration:none;margin-right:12px}
    nav a:hover{text-decoration:underline}
    .toc{border-left:3px solid #e2e8f0;padding-left:12px;margin:8px 0 24px}
    .note{background:#f1f5f9;border:1px solid #e2e8f0;border-radius:8px;padding:12px}
    ul{padding-left:1.2rem}
    footer{padding:24px 20px;border-top:1px solid #e2e8f0;color:#475569}
    code{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:90%}
  </style>
</head>
<body>
<header>
  <div class="badge">Dernière mise à jour : 20/09/2025</div>
  <h1>Politique de confidentialité</h1>
  <p class="muted">Comment nous collectons, utilisons, partageons et protégeons vos données.</p>
  <nav>
    <a href="#qui">Qui est responsable ?</a>
    <a href="#donnees">Données collectées</a>
    <a href="#base">Bases légales</a>
    <a href="#partage">Partage</a>
    <a href="#securite">Sécurité</a>
    <a href="#droits">Vos droits</a>
  </nav>
</header>

<main>
  <section class="toc">
    <strong>Table des matières</strong>
    <ol>
      <li><a href="#qui">Responsable du traitement</a></li>
      <li><a href="#donnees">Quelles données collectons-nous ?</a></li>
      <li><a href="#base">Bases légales & finalités</a></li>
      <li><a href="#conservation">Durées de conservation</a></li>
      <li><a href="#partage">Partage & destinataires</a></li>
      <li><a href="#transferts">Transferts internationaux</a></li>
      <li><a href="#securite">Sécurité</a></li>
      <li><a href="#cookies">Cookies & traceurs</a></li>
      <li><a href="#mineurs">Mineurs</a></li>
      <li><a href="#droits">Vos droits</a></li>
      <li><a href="#contact">Contact & DPO</a></li>
    </ol>
  </section>

  <section id="qui">
    <h2>1. Responsable du traitement</h2>
    <p><strong>ProxyDoc</strong> – <strong>TODO : PROXYDOC SARL</strong>, <strong>TODO RC/NIF</strong> – siège : <strong>TODO adresse, Kinshasa (RDC)</strong>.</p>
    <p>E-mail : <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a> — Délégué à la protection des données : <a href="mailto:dpo@proxydoc.org">dpo@proxydoc.org</a></p>
  </section>

  <section id="donnees">
    <h2>2. Données collectées</h2>
    <ul>
      <li><strong>Compte</strong> : nom, prénom, e-mail, téléphone, adresse, mot de passe (haché), préférences.</li>
      <li><strong>Santé (sensibles, si applicable)</strong> : informations fournies pour rendez-vous/ordonnances (ex. symptômes, médicaments). Collecte limitée au nécessaire et traitée avec des garanties renforcées.</li>
      <li><strong>Commandes & paiements</strong> : produits, montants, devise (USD/CDF), référence transaction, canal (Mobile Money / carte), <em>gateway</em> (ex. Maxicash, Stripe). Les détails de carte ne sont pas stockés par ProxyDoc.</li>
      <li><strong>Journal technique</strong> : adresse IP, identifiants d’appareil, logs, horodatages.</li>
      <li><strong>Fichiers</strong> : documents/ordonnances, images (hébergées de façon privée sur AWS S3).</li>
    </ul>
  </section>

  <section id="base">
    <h2>3. Bases légales & finalités</h2>
    <ul>
      <li><strong>Exécution d’un contrat</strong> : création de compte, prise de rendez-vous, gestion des commandes/paiements, support.</li>
      <li><strong>Intérêt légitime</strong> : sécurité, prévention des fraudes, amélioration du service, statistiques agrégées.</li>
      <li><strong>Obligation légale</strong> : obligations comptables, sanitaires, anti-fraude.</li>
      <li><strong>Consentement</strong> : communications marketing, cookies non essentiels, traitements de données de santé hors strict nécessaire.</li>
    </ul>
  </section>

  <section id="conservation">
    <h2>4. Durées de conservation</h2>
    <ul>
      <li><strong>Compte</strong> : pendant l’usage du service puis 2 ans après inactivité (sauf obligation contraire).</li>
      <li><strong>Commandes/facturation</strong> : durée légale (ex. 10 ans pour pièces comptables).</li>
      <li><strong>Données de santé</strong> : durée strictement nécessaire à la finalité ou exigences légales du secteur.</li>
      <li><strong>Logs techniques</strong> : 6 à 24 mois selon finalité sécurité/diagnostic.</li>
    </ul>
  </section>

  <section id="partage">
    <h2>5. Partage & destinataires</h2>
    <ul>
      <li><strong>Pharmacies & professionnels de santé</strong> (exécution de votre demande/commande).</li>
      <li><strong>Prestataires de paiement</strong> : Mobile Money (M-Pesa, Orange Money, Airtel Money), passerelles (Maxicash, Stripe, etc.).</li>
      <li><strong>Hébergement & stockage</strong> : AWS (S3 us-east-2) avec accès privé et URL signées.</li>
      <li><strong>Support & analytics</strong> : prestataires strictement nécessaires, sous accords de traitement.</li>
      <li><strong>Autorités</strong> : lorsque requis par la loi.</li>
    </ul>
  </section>

  <section id="transferts">
    <h2>6. Transferts internationaux</h2>
    <p>Lorsque des données sont transférées hors de votre pays, nous mettons en place des garanties appropriées (clauses contractuelles types, audits des prestataires, mesures techniques et organisationnelles).</p>
  </section>

  <section id="securite">
    <h2>7. Sécurité</h2>
    <ul>
      <li>Chiffrement en transit (HTTPS) et stockage privé des fichiers (S3 privé, URL signées temporaires).</li>
      <li>Contrôles d’accès, journalisation, sauvegardes, durcissement des environnements.</li>
      <li>Gestion des vulnérabilités et réponses aux incidents.</li>
    </ul>
  </section>

  <section id="cookies">
    <h2>8. Cookies & traceurs</h2>
    <p>Nous utilisons des cookies nécessaires au fonctionnement (authentification, préférences). Les cookies analytiques/marketing sont soumis à votre consentement lorsqu’exigé par la loi. Vous pouvez gérer vos choix depuis le bandeau de consentement et les paramètres du navigateur.</p>
  </section>

  <section id="mineurs">
    <h2>9. Mineurs</h2>
    <p>Le service s’adresse aux personnes majeures. L’utilisation par un mineur requiert l’autorisation et la supervision d’un parent ou tuteur légal.</p>
  </section>

  <section id="droits">
    <h2>10. Vos droits</h2>
    <p>Selon la loi applicable (par ex. RDC et, si pertinent, RGPD), vous pouvez exercer vos droits d’accès, rectification, effacement, limitation, opposition, portabilité, et retrait du consentement. Pour les données de santé, des règles spécifiques s’appliquent.</p>
    <p>Pour exercer vos droits : <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a>. Nous pouvons vérifier votre identité avant de répondre.</p>
  </section>

  <section id="contact">
    <h2>11. Contact & réclamations</h2>
    <p>Questions sur la confidentialité : <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a>.
    Contact général : <a href="mailto:contact@proxydoc.org">contact@proxydoc.org</a>.</p>
    <p class="muted">Vous pouvez, le cas échéant, introduire une réclamation auprès de l’autorité compétente de protection des données.</p>
    <p class="muted"><a href="{{ route('terms') }}">Conditions d’utilisation</a></p>
  </section>
</main>

<footer>
  <p>© <span id="y"></span> ProxyDoc – Tous droits réservés.
    · <a href="{{ url('/') }}">Accueil</a>
    · <a href="{{ route('terms') }}">Conditions d’utilisation</a>
    · <a href="{{ route('contact') }}">Contact</a>
  </p>
</footer>
<script>document.getElementById('y').textContent=new Date().getFullYear()</script>
</body>
</html>
