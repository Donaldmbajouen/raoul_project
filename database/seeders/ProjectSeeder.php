<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Automatisez Vos Dossiers OPCO & Qualiopi',
            'slug' => 'automatisation-opco-qualiopi',
            'client' => 'ISOLUCE',
            'project_date' => '2024-04-10',
            'location' => 'France',
            'domain' => 'www.isoluce.fr',
            'category' => 'Automatisation & Agent IA',
            'short_description' => 'Automatisation complète de la génération des documents Qualiopi et OPCO pour réduire la charge administrative de 95%',
            'context' => '<p>ISOLUCE, organisme de formation spécialisé dans le digital, cherchait à réduire la charge administrative liée à la création des documents Qualiopi et OPCO.</p><p>La gestion manuelle des conventions, programmes Qualiopi, certificats, feuilles d\'engagement et devis représentait plusieurs heures de travail par dossier, avec un risque d\'erreurs élevé.</p><p>Nous avons mis en place une automatisation intelligente capable de générer instantanément tous les documents nécessaires, quel que soit le financeur : Atlas, Atlas FEF+, ADEFICE, FIFPL, AKTO, AKTO FSE+, Opcommerce, Opcommerce FSE+, OPCO EP, OPCO EP FSE+, FAFCEA, AFDAS, AFDAS FSE+, Opco 2i, Opco 2i FSE+.</p>',
            'summary' => '<p>Nous avons développé un workflow avancé utilisant n8n, Google Docs, Google Drive, Monday.com, Axonaut et l\'IA GPT pour automatiser l\'ensemble du processus documentaire.</p>',
            'hero_image' => null,
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
            'gallery' => [],
            'is_featured' => true,
            'is_active' => true,
        ]);

        Project::create([
            'title' => 'Site E-commerce Moderne',
            'slug' => 'site-ecommerce-moderne',
            'client' => 'Fashion Store',
            'project_date' => '2024-03-15',
            'location' => 'Paris, France',
            'domain' => 'www.fashionstore.fr',
            'category' => 'Création De Site Web',
            'short_description' => 'Création d\'une plateforme e-commerce complète avec gestion des stocks et paiements sécurisés',
            'context' => '<p>Fashion Store souhaitait moderniser sa présence en ligne avec une boutique e-commerce performante et intuitive.</p><p>L\'objectif était de créer une expérience d\'achat fluide tout en intégrant un système de gestion des stocks en temps réel.</p>',
            'summary' => '<p>Nous avons développé une solution e-commerce sur mesure avec Laravel, intégrant Stripe pour les paiements et un backoffice complet pour la gestion.</p>',
            'hero_image' => null,
            'features' => [
                'Catalogue produits avec filtres avancés',
                'Panier et checkout optimisés',
                'Paiements sécurisés (Stripe)',
                'Gestion des stocks en temps réel',
                'Espace client personnalisé',
                'Backoffice complet',
                'Responsive design'
            ],
            'benefits' => [
                ['icon' => '🚀', 'text' => 'Performance optimale'],
                ['icon' => '💳', 'text' => 'Paiements sécurisés'],
                ['icon' => '📱', 'text' => 'Mobile-first design'],
                ['icon' => '📊', 'text' => 'Analytics intégrés']
            ],
            'target_audience' => [
                'Boutiques en ligne',
                'Retailers',
                'Marques de mode'
            ],
            'gallery' => [],
            'is_featured' => true,
            'is_active' => true,
        ]);

        Project::create([
            'title' => 'Campagne Marketing Digital 360°',
            'slug' => 'campagne-marketing-digital',
            'client' => 'TechStart',
            'project_date' => '2024-02-20',
            'location' => 'Lyon, France',
            'domain' => 'www.techstart.fr',
            'category' => 'Marketing Digital',
            'short_description' => 'Stratégie marketing complète incluant SEO, réseaux sociaux et publicité en ligne',
            'context' => '<p>TechStart, une startup technologique, avait besoin d\'augmenter sa visibilité en ligne et générer des leads qualifiés.</p>',
            'summary' => '<p>Nous avons mis en place une stratégie marketing 360° combinant SEO, content marketing, social media et Google Ads.</p>',
            'hero_image' => null,
            'features' => [
                'Audit SEO complet',
                'Stratégie de contenu',
                'Gestion des réseaux sociaux',
                'Campagnes Google Ads',
                'Email marketing',
                'Reporting mensuel'
            ],
            'benefits' => [
                ['icon' => '📈', 'text' => '+250% de trafic organique'],
                ['icon' => '🎯', 'text' => '+180% de leads qualifiés'],
                ['icon' => '💰', 'text' => 'ROI de 400%'],
                ['icon' => '🌟', 'text' => 'Notoriété accrue']
            ],
            'target_audience' => [
                'Startups',
                'PME',
                'Entreprises tech'
            ],
            'gallery' => [],
            'is_featured' => false,
            'is_active' => true,
        ]);
    }
}
