<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeeder extends Seeder
{
    public function run(): void
    {
        Training::create([
            'title' => 'Conception Graphique',
            'slug' => 'conception-graphique',
            'short_description' => 'Maîtrisez tous les aspects de la conception graphique moderne et créez des visuels percutants',
            'full_description' => '<p>Cette formation complète vous permettra de maîtriser tous les aspects de la conception graphique moderne. Vous apprendrez à créer des visuels percutants, à développer une identité visuelle cohérente et à utiliser les outils professionnels du secteur.</p><p>Au programme : théorie du design, pratique intensive sur des projets réels, et accompagnement personnalisé pour développer votre portfolio professionnel.</p>',
            'image' => null,
            'duration' => '3 mois',
            'level' => 'Débutant à Intermédiaire',
            'price' => 450000,
            'features' => [
                'Développement de l\'identité visuelle',
                'Création de supports de communication',
                'Design d\'interfaces utilisateur',
                'Conception de logos et chartes graphiques',
                'Maîtrise des outils Adobe (Photoshop, Illustrator)',
                'Techniques de composition et typographie'
            ],
            'solutions' => [
                ['title' => 'Créativité sur mesure', 'description' => 'Des solutions créatives adaptées à vos besoins spécifiques'],
                ['title' => 'Supports marketing complets', 'description' => 'Création de tous vos supports de communication'],
                ['title' => 'Respect des délais', 'description' => 'Livraison dans les temps impartis'],
                ['title' => 'Identité visuelle professionnelle', 'description' => 'Construction d\'une image de marque forte'],
                ['title' => 'Accompagnement stratégique', 'description' => 'Conseil et suivi personnalisé'],
                ['title' => 'Expérience utilisateur optimale', 'description' => 'Design centré sur l\'utilisateur']
            ],
            'pricing_packs' => [
                [
                    'title' => 'Pack Logo',
                    'features' => [
                        'Recherche et analyse de marché',
                        'Création de 3 propositions de logo',
                        'Révisions illimitées',
                        'Fichiers sources fournis',
                        'Guide d\'utilisation du logo'
                    ]
                ],
                [
                    'title' => 'Pack Cartes de visite',
                    'features' => [
                        'Design recto-verso',
                        'Plusieurs variantes de mise en page',
                        'Fichiers prêts pour l\'impression',
                        'Format standard et personnalisé',
                        'Révisions incluses'
                    ]
                ],
                [
                    'title' => 'Pack Complet',
                    'features' => [
                        'Identité visuelle complète',
                        'Logo + Charte graphique',
                        'Supports de communication',
                        'Cartes de visite + Flyers',
                        'Présence digitale (réseaux sociaux)',
                        'Accompagnement sur 3 mois'
                    ]
                ]
            ],
            'related_services' => [],
            'is_active' => true,
        ]);

        Training::create([
            'title' => 'Développement Web Full Stack',
            'slug' => 'developpement-web-fullstack',
            'short_description' => 'Devenez développeur web full stack et créez des applications web modernes',
            'full_description' => '<p>Formation intensive pour devenir développeur web full stack. Apprenez à créer des applications web complètes de A à Z.</p><p>Technologies enseignées : HTML, CSS, JavaScript, React, Node.js, Laravel, bases de données SQL et NoSQL.</p>',
            'image' => null,
            'duration' => '6 mois',
            'level' => 'Débutant',
            'price' => 850000,
            'features' => [
                'HTML5, CSS3, JavaScript ES6+',
                'React et Vue.js',
                'Node.js et Express',
                'Laravel et PHP',
                'Bases de données (MySQL, MongoDB)',
                'Git et déploiement',
                'Projets réels'
            ],
            'solutions' => [],
            'pricing_packs' => [],
            'related_services' => [],
            'is_active' => true,
        ]);

        Training::create([
            'title' => 'Marketing Digital & Réseaux Sociaux',
            'slug' => 'marketing-digital-reseaux-sociaux',
            'short_description' => 'Maîtrisez les stratégies de marketing digital et la gestion des réseaux sociaux',
            'full_description' => '<p>Apprenez à créer et gérer des campagnes marketing digitales efficaces sur tous les canaux.</p><p>Formation pratique avec études de cas réels et création de votre propre stratégie marketing.</p>',
            'image' => null,
            'duration' => '2 mois',
            'level' => 'Tous niveaux',
            'price' => 350000,
            'features' => [
                'Stratégie de contenu',
                'Community management',
                'Publicité Facebook & Instagram',
                'Google Ads',
                'Email marketing',
                'Analytics et reporting',
                'Influencer marketing'
            ],
            'solutions' => [],
            'pricing_packs' => [],
            'related_services' => [],
            'is_active' => true,
        ]);
    }
}
