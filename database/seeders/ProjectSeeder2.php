<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder2 extends Seeder
{
    public function run(): void
    {
        // Projet 4 - Conception Graphique (nouvelle catégorie)
        Project::firstOrCreate(['slug' => 'identite-visuelle-agence-bloom'], [
            'title' => 'Identité Visuelle — Agence Bloom',
            'client' => 'Agence Bloom',
            'project_date' => '2024-05-08',
            'location' => 'Bordeaux, France',
            'domain' => 'www.agencebloom.fr',
            'category' => 'Conception Graphique',
            'short_description' => 'Création d\'une identité visuelle complète : logo, charte graphique, supports print et digitaux pour une agence de communication en pleine croissance.',
            'context' => '<p>L\'Agence Bloom, spécialisée en communication événementielle, souhaitait refondre entièrement son image de marque pour se démarquer sur un marché très concurrentiel.</p><p>L\'ancienne identité ne reflétait plus les valeurs de modernité et de créativité portées par l\'équipe. Un repositionnement visuel fort était nécessaire pour attirer une clientèle premium.</p>',
            'summary' => '<p>Nous avons conçu une identité visuelle cohérente et mémorable, déclinée sur l\'ensemble des supports de communication de l\'agence.</p><p>Du logo aux templates réseaux sociaux, en passant par les cartes de visite et la signalétique, chaque élément a été pensé pour renforcer la reconnaissance de la marque.</p>',
            'features' => [
                'Création du logo et de ses déclinaisons',
                'Charte graphique complète (couleurs, typographies, iconographie)',
                'Templates réseaux sociaux (Instagram, LinkedIn)',
                'Supports print : cartes de visite, flyers, kakémonos',
                'Présentation PowerPoint branded',
                'Guide d\'utilisation de la marque',
            ],
            'benefits' => [
                ['icon' => '🎨', 'text' => 'Image de marque cohérente et professionnelle'],
                ['icon' => '📱', 'text' => 'Déclinaisons digitales prêtes à l\'emploi'],
                ['icon' => '🏆', 'text' => 'Positionnement premium renforcé'],
                ['icon' => '⚡', 'text' => 'Livraison en 3 semaines'],
            ],
            'target_audience' => [
                'Agences de communication',
                'Startups en phase de lancement',
                'PME souhaitant moderniser leur image',
                'Entrepreneurs indépendants',
            ],
            'gallery' => [],
            'is_featured' => true,
            'is_active' => true,
        ]);

        // Projet 5 - Automatisation & Agent IA (même catégorie que projet 1)
        Project::firstOrCreate(['slug' => 'agent-ia-support-client'], [
            'title' => 'Agent IA Support Client 24/7',
            'client' => 'ShopEasy',
            'project_date' => '2024-06-15',
            'location' => 'Paris, France',
            'domain' => 'www.shopeasy.fr',
            'category' => 'Automatisation & Agent IA',
            'short_description' => 'Déploiement d\'un agent conversationnel IA capable de gérer 80% des demandes clients automatiquement, réduisant les coûts de support de 60%.',
            'context' => '<p>ShopEasy, plateforme e-commerce à forte croissance, faisait face à un volume de demandes support impossible à absorber avec une équipe humaine seule.</p><p>Les délais de réponse dépassaient 48h, générant frustration client et perte de ventes. Il fallait une solution scalable, disponible 24/7 et capable de s\'intégrer aux outils existants.</p>',
            'summary' => '<p>Nous avons conçu et déployé un agent IA sur mesure, entraîné sur la base de connaissances de ShopEasy et connecté à leur CRM, leur logistique et leur catalogue produits.</p><p>L\'agent gère les questions fréquentes, le suivi de commandes, les retours et escalade intelligemment vers un humain quand nécessaire.</p>',
            'features' => [
                'Agent conversationnel IA (GPT-4 fine-tuné)',
                'Intégration CRM et logistique en temps réel',
                'Gestion des retours et remboursements automatisée',
                'Escalade intelligente vers agents humains',
                'Disponible sur site web, WhatsApp et email',
                'Dashboard analytics des conversations',
                'Apprentissage continu à partir des feedbacks',
            ],
            'benefits' => [
                ['icon' => '🤖', 'text' => '80% des demandes traitées automatiquement'],
                ['icon' => '⏱️', 'text' => 'Temps de réponse < 5 secondes'],
                ['icon' => '💰', 'text' => '-60% de coûts de support'],
                ['icon' => '😊', 'text' => 'Satisfaction client +35%'],
                ['icon' => '🌙', 'text' => 'Disponible 24h/24, 7j/7'],
            ],
            'target_audience' => [
                'E-commerces à fort volume',
                'SaaS avec base clients importante',
                'Services clients débordés',
                'Entreprises cherchant à scaler sans recruter',
            ],
            'gallery' => [],
            'is_featured' => true,
            'is_active' => true,
        ]);

        // Projet 6 - Création De Site Web (même catégorie que projet 2)
        Project::firstOrCreate(['slug' => 'site-vitrine-cabinet-juridique'], [
            'title' => 'Site Vitrine — Cabinet Juridique Maître Diallo',
            'client' => 'Cabinet Diallo & Associés',
            'project_date' => '2024-07-22',
            'location' => 'Marseille, France',
            'domain' => 'www.cabinet-diallo.fr',
            'category' => 'Création De Site Web',
            'short_description' => 'Conception d\'un site vitrine élégant et rassurant pour un cabinet d\'avocats, avec prise de rendez-vous en ligne et espace client sécurisé.',
            'context' => '<p>Le Cabinet Diallo & Associés, fort de 15 ans d\'expérience en droit des affaires et droit social, n\'avait aucune présence digitale digne de ce nom.</p><p>Dans un secteur où la confiance est primordiale, un site professionnel et sécurisé était devenu indispensable pour attirer de nouveaux clients et moderniser la relation avec les clients existants.</p>',
            'summary' => '<p>Nous avons conçu un site vitrine sobre et professionnel, mettant en valeur l\'expertise du cabinet tout en facilitant la prise de contact et la prise de rendez-vous.</p><p>Un espace client sécurisé permet l\'échange de documents confidentiels en toute sérénité.</p>',
            'features' => [
                'Design élégant et rassurant adapté au secteur juridique',
                'Présentation des domaines d\'expertise',
                'Prise de rendez-vous en ligne (Calendly intégré)',
                'Espace client sécurisé pour l\'échange de documents',
                'Blog juridique pour le référencement naturel',
                'Formulaire de contact avec accusé de réception',
                'Optimisation SEO local (Marseille)',
                'Conformité RGPD complète',
            ],
            'benefits' => [
                ['icon' => '⚖️', 'text' => 'Image professionnelle et rassurante'],
                ['icon' => '📅', 'text' => 'Prise de RDV automatisée'],
                ['icon' => '🔒', 'text' => 'Échange de documents sécurisé'],
                ['icon' => '📍', 'text' => '+120% de visibilité locale en 3 mois'],
            ],
            'target_audience' => [
                'Cabinets d\'avocats',
                'Notaires et huissiers',
                'Experts-comptables',
                'Professions libérales réglementées',
            ],
            'gallery' => [],
            'is_featured' => false,
            'is_active' => true,
        ]);
    }
}
