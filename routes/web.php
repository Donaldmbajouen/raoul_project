<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Placeholder routes (à développer)
Route::get('/services', function () {
    return view('home'); // TODO: créer la vue services
})->name('services');

Route::get('/services/{slug}', function ($slug) {
    return view('service-single', ['slug' => $slug]);
})->name('services.show');

Route::get('/a-propos', function () {
    return view('about');
})->name('about');

Route::get('/realisations', function () {
    return view('realizations');
})->name('realizations');

Route::get('/programmes', function () {
    return view('programs');
})->name('programs');

Route::get('/formations', function () {
    return view('training');
})->name('training');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog/{slug}', function () {
    return view('blog-single');
})->name('blog.single');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Project Single Page
Route::get('/projet/{slug}', function ($slug) {
    // Exemple de données de projet - à remplacer par une base de données
    $projects = [
        'automatisation-opco-qualiopi' => [
            'title' => 'Automatisez Vos Dossiers OPCO & Qualiopi',
            'hero_image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2000&auto=format&fit=crop',
            'date' => '10 April 2024',
            'client' => 'Phyllis J. Lucero',
            'domain' => 'www.domainname.com',
            'location' => 'New York, USA',
            'context' => '<p>ISOLUCE, organisme de formation spécialisé dans le digital, cherchait à réduire la charge administrative liée à la création des documents Qualiopi et OPCO.</p><p>La gestion manuelle des conventions, programmes Qualiopi, certificats, feuilles d\'engagement et devis représentait plusieurs heures de travail par dossier, avec un risque d\'erreurs élevé.</p><p>Nous avons mis en place une automatisation intelligente capable de générer instantanément tous les documents nécessaires, quel que soit le financeur : Atlas, Atlas FEF+, ADEFICE, FIFPL, AKTO, AKTO FSE+, Opcommerce, Opcommerce FSE+, OPCO EP, OPCO EP FSE+, FAFCEA, AFDAS, AFDAS FSE+, Opco 2i, Opco 2i FSE+.</p>',
            'summary' => '<p>Nous avons développé un workflow avancé utilisant n8n, Google Docs, Google Drive, Monday.com, Axonaut et l\'IA GPT pour automatiser l\'ensemble du processus documentaire.</p>',
            'features' => [
                'La récupération automatique des données depuis Monday.com',
                'La génération de tous les documents Qualiopi',
                'La production des documents adaptés à chaque financeur OPCO / FAF',
                'La création automatique du devis dans Axonaut',
                'La rédaction du programme Qualiopi',
                'Le classement automatique des documents dans Google Drive',
                'Une notification Slack pour signaler la création du dossier'
            ],
            'benefits' => [
                ['icon' => '⏱️', 'text' => '95 % de temps gagné'],
                ['icon' => '📋', 'text' => 'Documents conformes Qualiopi & OPCO'],
                ['icon' => '🎯', 'text' => 'Zéro erreur humaine'],
                ['icon' => '⚡', 'text' => 'Dossier complet prêt en moins d\'une minute'],
                ['icon' => '🔄', 'text' => 'Process automatique, fiable et scalable']
            ],
            'target_audience' => [
                'Organismes de formation',
                'Centres de formation internes',
                'Formateurs indépendants',
                'CFA / Écoles',
                'Services RH',
                'Toutes structures travaillant avec des OPCO ou financeurs (FIFPL, FAF, etc.)'
            ],
            'gallery' => [
                'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=800&auto=format&fit=crop'
            ]
        ]
    ];
    
    $project = $projects[$slug] ?? abort(404);
    
    return view('project-single', compact('project'));
})->name('project.show');

// Training Single Page
Route::get('/formation/{slug}', function ($slug) {
    // Exemple de données de formation
    $trainings = [
        'conception-graphique' => [
            'title' => 'Conception Graphique',
            'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=800&auto=format&fit=crop',
            'features' => [
                'Développement de l\'identité visuelle',
                'Création de supports de communication',
                'Design d\'interfaces utilisateur',
                'Conception de logos et chartes graphiques',
                'Maîtrise des outils Adobe (Photoshop, Illustrator)',
                'Techniques de composition et typographie'
            ],
            'description' => '<p>Cette formation complète vous permettra de maîtriser tous les aspects de la conception graphique moderne. Vous apprendrez à créer des visuels percutants, à développer une identité visuelle cohérente et à utiliser les outils professionnels du secteur.</p><p>Au programme : théorie du design, pratique intensive sur des projets réels, et accompagnement personnalisé pour développer votre portfolio professionnel.</p>',
            'solutions' => [
                ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => 'Créativité sur mesure', 'description' => 'Des solutions créatives adaptées à vos besoins spécifiques'],
                ['icon' => 'M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z', 'title' => 'Supports marketing complets', 'description' => 'Création de tous vos supports de communication'],
                ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Respect des délais', 'description' => 'Livraison dans les temps impartis'],
                ['icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z', 'title' => 'Identité visuelle professionnelle', 'description' => 'Construction d\'une image de marque forte'],
                ['icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'title' => 'Accompagnement stratégique', 'description' => 'Conseil et suivi personnalisé'],
                ['icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Expérience utilisateur optimale', 'description' => 'Design centré sur l\'utilisateur']
            ],
            'pricing' => [
                ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1', 'title' => 'Pack Logo', 'features' => ['Recherche et analyse de marché', 'Création de 3 propositions de logo', 'Révisions illimitées', 'Fichiers sources fournis', 'Guide d\'utilisation du logo']],
                ['icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'title' => 'Pack Cartes de visite', 'features' => ['Design recto-verso', 'Plusieurs variantes de mise en page', 'Fichiers prêts pour l\'impression', 'Format standard et personnalisé', 'Révisions incluses']],
                ['icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'title' => 'Pack Complet', 'features' => ['Identité visuelle complète', 'Logo + Charte graphique', 'Supports de communication', 'Cartes de visite + Flyers', 'Présence digitale (réseaux sociaux)', 'Accompagnement sur 3 mois']]
            ],
            'related_services' => [
                ['title' => 'Création de site web', 'link' => '#'],
                ['title' => 'Marketing digital', 'link' => '#'],
                ['title' => 'Automatisation & Agent IA', 'link' => '#']
            ]
        ]
    ];
    
    $training = $trainings[$slug] ?? abort(404);
    
    return view('training-single', compact('training'));
})->name('training.show');
