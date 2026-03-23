<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // Supprimer les anciens slugs qui ne correspondent plus à la navbar
        $oldSlugs = [
            'conception-graphique', 'automatisation-agent-ia', 'conception-agents-ia',
            'ia-automatisation-processus', 'creation-site-web', 'marketing-digital',
            'acquisition-clients', 'developpement-web', 'developpement-mobile', 'conseils-audit-it'
        ];
        Service::whereIn('slug', $oldSlugs)->delete();

        $services = [
            // SR
            ['title' => 'Réseaux Informatiques',   'slug' => 'reseaux-informatiques', 'category' => 'SR', 'display_order' => 1,
             'short_description' => 'Nous concevons, installons et maintenons des infrastructures réseau performantes et sécurisées adaptées à votre entreprise. Qu\'il s\'agisse d\'un réseau local (LAN), d\'un réseau étendu (WAN), d\'une solution Wi-Fi professionnelle ou d\'un VPN sécurisé, notre équipe assure une connectivité fiable, rapide et protégée pour tous vos collaborateurs et équipements.',
             'full_description'  => '<p>Nous concevons et déployons des infrastructures réseau adaptées à vos besoins : LAN, WAN, Wi-Fi, VPN.</p>',
             'base_price' => 200000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Serveurs & Infrastructure', 'slug' => 'serveurs', 'category' => 'SR', 'display_order' => 2,
             'short_description' => 'Nous prenons en charge l\'installation, la configuration et la gestion complète de vos serveurs physiques et virtuels. De la mise en place de votre infrastructure à la supervision quotidienne, en passant par la virtualisation, le stockage et les sauvegardes automatisées, nous garantissons la disponibilité et la sécurité de vos données critiques.',
             'full_description'  => '<p>Nous gérons l\'intégralité de votre infrastructure serveur : physique, virtualisation, stockage, sauvegarde.</p>',
             'base_price' => 300000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Cloud & Hébergement', 'slug' => 'cloud-hebergement', 'category' => 'SR', 'display_order' => 3,
             'short_description' => 'Nous vous accompagnons dans votre migration vers le cloud et gérons votre hébergement web de A à Z. Que vous optiez pour AWS, Azure, Google Cloud ou un hébergement managé dédié, nous optimisons vos coûts, assurons la haute disponibilité de vos services et sécurisons vos environnements de production avec des sauvegardes régulières.',
             'full_description'  => '<p>Nous vous accompagnons dans votre migration vers le cloud et gérons votre hébergement web.</p>',
             'base_price' => 150000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Télécom & IoT', 'slug' => 'telecom-iot', 'category' => 'SR', 'display_order' => 4,
             'short_description' => 'Nous déployons des solutions de télécommunications modernes (VoIP, IPBX, fibre dédiée) et des architectures IoT pour connecter vos équipements et automatiser vos processus industriels. Nos solutions permettent une communication fluide entre vos équipes et une supervision en temps réel de vos objets connectés.',
             'full_description'  => '<p>Nous déployons des solutions télécom (VoIP, IPBX, fibre) et IoT pour connecter vos équipements.</p>',
             'base_price' => 250000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Data & IA', 'slug' => 'data-ia', 'category' => 'SR', 'display_order' => 5,
             'short_description' => 'Nous transformons vos données brutes en insights actionnables grâce à la data science, le machine learning et l\'intelligence artificielle. De la collecte à la visualisation, en passant par la modélisation prédictive, nous vous aidons à prendre des décisions éclairées, à anticiper les tendances et à automatiser vos analyses métier.',
             'full_description'  => '<p>Nous transformons vos données brutes en insights actionnables grâce à la data science et l\'IA.</p>',
             'base_price' => 400000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Intégration des API', 'slug' => 'integration-api', 'category' => 'SR', 'display_order' => 6,
             'short_description' => 'Nous connectons vos applications, outils et services tiers grâce à des intégrations API robustes et fiables. Que ce soit pour synchroniser vos données entre plateformes, automatiser des flux métier ou exposer vos propres services via une API RESTful ou GraphQL, nous garantissons des échanges sécurisés, performants et maintenables.',
             'full_description'  => '<p>Nous concevons et intégrons des API RESTful et GraphQL pour faire communiquer vos systèmes.</p>',
             'base_price' => 200000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            // GL
            ['title' => 'Conception des Agents IA', 'slug' => 'agents-ia', 'category' => 'GL', 'display_order' => 7,
             'short_description' => 'Nous développons des agents IA conversationnels et autonomes sur mesure, capables de comprendre le langage naturel, d\'exécuter des tâches complexes et d\'interagir avec vos systèmes existants. Que ce soit pour automatiser votre support client, qualifier vos leads ou orchestrer des workflows intelligents, nos agents IA travaillent pour vous 24h/24.',
             'full_description'  => '<p>Nous concevons des agents IA sur mesure capables de comprendre le langage naturel et d\'exécuter des tâches complexes.</p>',
             'base_price' => 350000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'IA & Automatisation', 'slug' => 'ia-automatisation', 'category' => 'GL', 'display_order' => 8,
             'short_description' => 'Nous intégrons l\'intelligence artificielle et l\'automatisation avancée au cœur de vos processus métier pour les rendre plus rapides, plus précis et moins coûteux. De l\'automatisation de tâches répétitives à la mise en place de workflows intelligents avec des outils comme n8n, Make ou Zapier, nous libérons vos équipes pour des missions à plus forte valeur ajoutée.',
             'full_description'  => '<p>Nous intégrons l\'IA dans vos processus pour les rendre intelligents et adaptatifs.</p>',
             'base_price' => 400000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Réseaux Internet', 'slug' => 'reseaux-internet', 'category' => 'GL', 'display_order' => 9,
             'short_description' => 'Nous fournissons et gérons des solutions d\'accès internet professionnelles adaptées aux exigences des entreprises : fibre dédiée, SD-WAN, liens de secours 4G/5G et gestion de la qualité de service (QoS). Nous garantissons une connectivité stable et sécurisée pour vos activités critiques, avec un suivi proactif et une intervention rapide en cas d\'incident.',
             'full_description'  => '<p>Nous fournissons et gérons des solutions d\'accès internet professionnelles : fibre dédiée, SDWAN, liens de secours.</p>',
             'base_price' => 180000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Logiciels de Gestion', 'slug' => 'logiciels-gestion', 'category' => 'GL', 'display_order' => 10,
             'short_description' => 'Nous développons et intégrons des logiciels de gestion sur mesure parfaitement adaptés à vos processus internes : ERP, CRM, GMAO, gestion des ressources humaines, facturation et bien plus. Nos solutions centralisent vos données, automatisent vos workflows et offrent des tableaux de bord clairs pour piloter votre activité en temps réel.',
             'full_description'  => '<p>Nous développons des logiciels de gestion adaptés à vos processus : ERP, CRM, GMAO, gestion RH, facturation.</p>',
             'base_price' => 600000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Formation Informatique', 'slug' => 'formation-informatique', 'category' => 'GL', 'display_order' => 11,
             'short_description' => 'Nous proposons des formations informatiques sur mesure pour vos équipes, du débutant à l\'expert. Bureautique, cybersécurité, développement web, cloud, intelligence artificielle ou administration système : nos formateurs certifiés dispensent des sessions pratiques, adaptées à votre secteur et à vos objectifs, en présentiel ou à distance.',
             'full_description'  => '<p>Nous proposons des formations adaptées à tous les niveaux : bureautique, cybersécurité, développement, cloud, IA.</p>',
             'base_price' => 100000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],

            ['title' => 'Conseils & Audit', 'slug' => 'conseils-audit', 'category' => 'GL', 'display_order' => 12,
             'short_description' => 'Nos experts réalisent un audit complet de votre infrastructure IT et vous fournissent des recommandations stratégiques pour optimiser vos systèmes, réduire vos coûts et renforcer votre sécurité. Nous vous accompagnons dans l\'élaboration d\'une feuille de route claire pour moderniser votre système d\'information et aligner votre IT sur vos objectifs business.',
             'full_description'  => '<p>Nos experts analysent votre infrastructure et vous proposent une feuille de route pour moderniser votre SI.</p>',
             'base_price' => 200000, 'advantages' => [], 'process_steps' => [], 'faq' => [], 'is_active' => true],
        ];

        foreach ($services as $data) {
            Service::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
