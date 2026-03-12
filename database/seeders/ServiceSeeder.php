<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'title' => 'Création de Site Web',
            'slug' => 'creation-site-web',
            'category' => 'GL',
            'short_description' => 'Conception et développement de sites web modernes, performants et responsive',
            'full_description' => 'Nous créons des sites web sur mesure qui reflètent votre identité et atteignent vos objectifs. De la conception à la mise en ligne, nous vous accompagnons à chaque étape. Sites vitrines, e-commerce, applications web - nous maîtrisons toutes les technologies modernes pour vous offrir une solution performante et évolutive.',
            'image' => null,
            'icon' => null,
            'base_price' => 500000,
            'display_order' => 1,
            'advantages' => [
                ['title' => 'Design moderne', 'description' => 'Interface utilisateur intuitive et attractive'],
                ['title' => 'Responsive', 'description' => 'Adapté à tous les écrans (mobile, tablette, desktop)'],
                ['title' => 'SEO optimisé', 'description' => 'Référencement naturel intégré dès la conception'],
                ['title' => 'Performance', 'description' => 'Temps de chargement optimisé'],
                ['title' => 'Sécurisé', 'description' => 'Protection contre les menaces en ligne'],
                ['title' => 'Évolutif', 'description' => 'Facilement extensible selon vos besoins']
            ],
            'process_steps' => [
                ['number' => 1, 'title' => 'Analyse', 'description' => 'Étude de vos besoins et objectifs'],
                ['number' => 2, 'title' => 'Conception', 'description' => 'Création des maquettes et prototypes'],
                ['number' => 3, 'title' => 'Développement', 'description' => 'Codage et intégration'],
                ['number' => 4, 'title' => 'Tests', 'description' => 'Vérification et optimisation'],
                ['number' => 5, 'title' => 'Mise en ligne', 'description' => 'Déploiement et formation']
            ],
            'faq' => [
                ['question' => 'Quel est le délai de réalisation ?', 'answer' => 'Entre 4 et 12 semaines selon la complexité du projet'],
                ['question' => 'Proposez-vous la maintenance ?', 'answer' => 'Oui, nous offrons des contrats de maintenance mensuels'],
                ['question' => 'Le site sera-t-il responsive ?', 'answer' => 'Absolument, tous nos sites sont responsive par défaut']
            ],
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Marketing Digital',
            'slug' => 'marketing-digital',
            'category' => 'GL',
            'short_description' => 'Stratégies marketing complètes pour booster votre visibilité en ligne',
            'full_description' => 'Augmentez votre visibilité et générez plus de leads avec nos stratégies marketing digital sur mesure. SEO, SEA, réseaux sociaux, content marketing - nous utilisons tous les leviers pour atteindre vos objectifs business.',
            'image' => null,
            'icon' => null,
            'base_price' => 300000,
            'display_order' => 2,
            'advantages' => [
                ['title' => 'ROI mesurable', 'description' => 'Suivi précis de vos investissements'],
                ['title' => 'Stratégie 360°', 'description' => 'Tous les canaux digitaux couverts'],
                ['title' => 'Expertise', 'description' => 'Équipe certifiée Google & Facebook'],
                ['title' => 'Reporting', 'description' => 'Rapports détaillés mensuels']
            ],
            'process_steps' => [
                ['number' => 1, 'title' => 'Audit', 'description' => 'Analyse de votre présence actuelle'],
                ['number' => 2, 'title' => 'Stratégie', 'description' => 'Définition des objectifs et plan d\'action'],
                ['number' => 3, 'title' => 'Exécution', 'description' => 'Mise en place des campagnes'],
                ['number' => 4, 'title' => 'Optimisation', 'description' => 'Ajustements continus pour maximiser les résultats']
            ],
            'faq' => [],
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Automatisation & Agent IA',
            'slug' => 'automatisation-agent-ia',
            'category' => 'SR',
            'short_description' => 'Automatisez vos processus métier et gagnez en productivité avec l\'IA',
            'full_description' => 'Libérez votre équipe des tâches répétitives grâce à l\'automatisation intelligente. Nous créons des workflows sur mesure qui s\'intègrent parfaitement à vos outils existants (CRM, ERP, outils métier).',
            'image' => null,
            'icon' => null,
            'base_price' => 250000,
            'display_order' => 3,
            'advantages' => [
                ['title' => 'Gain de temps', 'description' => 'Jusqu\'à 80% de temps économisé'],
                ['title' => 'Zéro erreur', 'description' => 'Élimination des erreurs humaines'],
                ['title' => 'Scalable', 'description' => 'S\'adapte à votre croissance'],
                ['title' => 'ROI rapide', 'description' => 'Retour sur investissement en quelques mois']
            ],
            'process_steps' => [
                ['number' => 1, 'title' => 'Identification', 'description' => 'Analyse des processus à automatiser'],
                ['number' => 2, 'title' => 'Conception', 'description' => 'Design du workflow automatisé'],
                ['number' => 3, 'title' => 'Développement', 'description' => 'Création et intégration'],
                ['number' => 4, 'title' => 'Formation', 'description' => 'Accompagnement de vos équipes']
            ],
            'faq' => [],
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Conception Graphique',
            'slug' => 'conception-graphique',
            'category' => 'SR',
            'short_description' => 'Création d\'identités visuelles et supports de communication impactants',
            'full_description' => 'Donnez vie à votre marque avec des créations graphiques professionnelles. Logo, charte graphique, supports print et digital - nous créons des visuels qui marquent les esprits.',
            'image' => null,
            'icon' => null,
            'base_price' => 150000,
            'display_order' => 4,
            'advantages' => [
                ['title' => 'Créativité', 'description' => 'Designs uniques et originaux'],
                ['title' => 'Cohérence', 'description' => 'Identité visuelle harmonieuse'],
                ['title' => 'Formats multiples', 'description' => 'Tous les formats livrés'],
                ['title' => 'Révisions', 'description' => 'Modifications jusqu\'à satisfaction']
            ],
            'process_steps' => [],
            'faq' => [],
            'is_active' => true,
        ]);
    }
}
