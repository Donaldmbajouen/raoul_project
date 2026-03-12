<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('is_admin', true)->first();

        Blog::create([
            'title' => 'Les tendances du web design en 2024',
            'slug' => 'tendances-web-design-2024',
            'excerpt' => 'Découvrez les dernières tendances qui façonnent le web design moderne et comment les intégrer dans vos projets.',
            'content' => '<p>Le web design évolue constamment, et 2024 apporte son lot de nouvelles tendances passionnantes. Dans cet article, nous explorons les styles visuels, les interactions et les technologies qui définissent le design web moderne.</p><h2>1. Le minimalisme évolué</h2><p>Le minimalisme reste populaire, mais avec une touche de sophistication. Les designers utilisent des espaces blancs généreux, des typographies audacieuses et des animations subtiles pour créer des expériences épurées mais engageantes.</p><h2>2. Les dégradés et couleurs vives</h2><p>Les dégradés colorés font leur grand retour, apportant de la profondeur et de la dimension aux interfaces. Les palettes de couleurs vives et contrastées attirent l\'attention et créent des expériences mémorables.</p><h2>3. Les micro-interactions</h2><p>Les petites animations qui répondent aux actions de l\'utilisateur améliorent l\'expérience globale et rendent les interfaces plus vivantes et intuitives.</p>',
            'image' => null,
            'category' => 'Web Design',
            'tags' => ['design', 'tendances', 'web'],
            'user_id' => $admin->id,
            'published_at' => now()->subDays(5),
            'status' => 'published',
            'meta_title' => 'Tendances Web Design 2024 | Guide Complet',
            'meta_description' => 'Découvrez les tendances web design 2024 : minimalisme, dégradés, micro-interactions et plus encore.',
            'meta_keywords' => 'web design, tendances 2024, design moderne, UX',
        ]);

        Blog::create([
            'title' => 'Comment l\'IA transforme le marketing digital',
            'slug' => 'ia-transforme-marketing-digital',
            'excerpt' => 'L\'intelligence artificielle révolutionne le marketing digital. Découvrez comment l\'utiliser pour booster vos performances.',
            'content' => '<p>L\'intelligence artificielle n\'est plus une technologie futuriste - elle est déjà là et transforme profondément le marketing digital.</p><h2>Personnalisation à grande échelle</h2><p>L\'IA permet de personnaliser l\'expérience de chaque utilisateur en temps réel, en analysant son comportement et ses préférences pour lui proposer du contenu pertinent.</p><h2>Automatisation intelligente</h2><p>Les chatbots IA, l\'email marketing automatisé et la création de contenu assistée par IA permettent de gagner un temps précieux tout en améliorant les résultats.</p><h2>Analyse prédictive</h2><p>L\'IA analyse les données pour prédire les tendances et comportements futurs, permettant aux marketeurs d\'anticiper et d\'optimiser leurs stratégies.</p>',
            'image' => null,
            'category' => 'Marketing Digital',
            'tags' => ['IA', 'marketing', 'automatisation'],
            'user_id' => $admin->id,
            'published_at' => now()->subDays(10),
            'status' => 'published',
            'meta_title' => 'IA et Marketing Digital : Guide 2024',
            'meta_description' => 'Comment l\'intelligence artificielle transforme le marketing digital : personnalisation, automatisation et analyse prédictive.',
            'meta_keywords' => 'IA, intelligence artificielle, marketing digital, automatisation',
        ]);

        Blog::create([
            'title' => '10 astuces pour optimiser le SEO de votre site',
            'slug' => '10-astuces-optimiser-seo',
            'excerpt' => 'Améliorez votre référencement naturel avec ces 10 techniques éprouvées par nos experts SEO.',
            'content' => '<p>Le SEO est essentiel pour la visibilité en ligne. Voici 10 astuces concrètes pour améliorer votre référencement.</p><h2>1. Optimisez vos balises title et meta</h2><p>Chaque page doit avoir un title unique et une meta description engageante qui incite au clic.</p><h2>2. Créez du contenu de qualité</h2><p>Le contenu reste roi. Publiez régulièrement des articles utiles et bien structurés.</p><h2>3. Améliorez la vitesse de chargement</h2><p>Un site rapide améliore l\'expérience utilisateur et le classement Google.</p><h2>4. Optimisez pour mobile</h2><p>Plus de 60% du trafic vient du mobile. Votre site doit être parfaitement responsive.</p><h2>5. Utilisez les mots-clés stratégiquement</h2><p>Intégrez naturellement vos mots-clés dans le contenu, les titres et les URLs.</p>',
            'image' => null,
            'category' => 'SEO',
            'tags' => ['SEO', 'référencement', 'optimisation'],
            'user_id' => $admin->id,
            'published_at' => now()->subDays(15),
            'status' => 'published',
            'meta_title' => '10 Astuces SEO pour Améliorer votre Référencement',
            'meta_description' => 'Découvrez 10 techniques SEO éprouvées pour optimiser votre site et améliorer votre positionnement Google.',
            'meta_keywords' => 'SEO, référencement naturel, optimisation, Google',
        ]);

        Blog::create([
            'title' => 'Laravel 11 : Les nouveautés à connaître',
            'slug' => 'laravel-11-nouveautes',
            'excerpt' => 'Laravel 11 apporte de nombreuses améliorations. Découvrez les fonctionnalités qui vont changer votre façon de développer.',
            'content' => '<p>Laravel 11 est sorti avec son lot de nouveautés excitantes pour les développeurs PHP.</p><h2>Structure simplifiée</h2><p>La nouvelle structure de projet est plus épurée, avec moins de fichiers de configuration par défaut.</p><h2>Performance améliorée</h2><p>Des optimisations au niveau du framework permettent des temps de réponse encore plus rapides.</p><h2>Nouvelles fonctionnalités</h2><p>De nouveaux helpers, des améliorations d\'Eloquent et une meilleure gestion des queues font partie des ajouts majeurs.</p>',
            'image' => null,
            'category' => 'Développement',
            'tags' => ['Laravel', 'PHP', 'développement'],
            'user_id' => $admin->id,
            'published_at' => now()->subDays(20),
            'status' => 'published',
            'meta_title' => 'Laravel 11 : Nouveautés et Améliorations',
            'meta_description' => 'Découvrez toutes les nouveautés de Laravel 11 : structure simplifiée, performance et nouvelles fonctionnalités.',
            'meta_keywords' => 'Laravel 11, PHP, framework, développement web',
        ]);

        Blog::create([
            'title' => 'Guide complet de l\'automatisation des processus métier',
            'slug' => 'guide-automatisation-processus-metier',
            'excerpt' => 'L\'automatisation peut transformer votre entreprise. Voici comment identifier et automatiser vos processus clés.',
            'content' => '<p>L\'automatisation des processus métier n\'est plus réservée aux grandes entreprises. Avec les bons outils, toute organisation peut en bénéficier.</p><h2>Identifier les processus à automatiser</h2><p>Commencez par les tâches répétitives, chronophages et sujettes aux erreurs. Ce sont les meilleurs candidats pour l\'automatisation.</p><h2>Choisir les bons outils</h2><p>De n8n à Zapier en passant par Make, il existe de nombreuses solutions d\'automatisation adaptées à différents besoins et budgets.</p><h2>Mesurer le ROI</h2><p>Calculez le temps économisé, les erreurs évitées et l\'amélioration de la productivité pour justifier votre investissement.</p>',
            'image' => null,
            'category' => 'Automatisation',
            'tags' => ['automatisation', 'productivité', 'business'],
            'user_id' => $admin->id,
            'published_at' => now()->subDays(25),
            'status' => 'published',
            'meta_title' => 'Guide Automatisation des Processus Métier',
            'meta_description' => 'Comment automatiser vos processus métier pour gagner en productivité et réduire les erreurs.',
            'meta_keywords' => 'automatisation, processus métier, productivité, n8n',
        ]);
    }
}
