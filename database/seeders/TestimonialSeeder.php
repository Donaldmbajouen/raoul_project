<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::create([
            'client_name' => 'Marie Dubois',
            'company' => 'TechStart SAS',
            'position' => 'CEO',
            'testimonial' => 'Raoul Projet a transformé notre présence en ligne. Leur expertise en développement web et leur approche personnalisée ont dépassé nos attentes. Le site est magnifique et performant !',
            'rating' => 5,
            'photo' => null,
            'icon' => null,
            'bg_color' => '#3B7BF8',
            'display_order' => 1,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Jean Martin',
            'company' => 'ISOLUCE Formation',
            'position' => 'Directeur',
            'testimonial' => 'L\'automatisation mise en place par Raoul Projet nous a fait gagner un temps considérable. Plus de 95% de temps économisé sur la génération de nos documents administratifs. Incroyable !',
            'rating' => 5,
            'photo' => null,
            'icon' => null,
            'bg_color' => '#10B981',
            'display_order' => 2,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Sophie Laurent',
            'company' => 'Fashion Store',
            'position' => 'Responsable Marketing',
            'testimonial' => 'Grâce à leur stratégie marketing digital, nous avons doublé notre trafic en 3 mois. L\'équipe est réactive, professionnelle et toujours de bon conseil.',
            'rating' => 5,
            'photo' => null,
            'icon' => null,
            'bg_color' => '#F59E0B',
            'display_order' => 3,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Pierre Durand',
            'company' => 'Consulting Pro',
            'position' => 'Fondateur',
            'testimonial' => 'Un accompagnement de qualité du début à la fin. Le site créé reflète parfaitement notre image de marque et nous recevons régulièrement des compliments de nos clients.',
            'rating' => 5,
            'photo' => null,
            'icon' => null,
            'bg_color' => '#8B5CF6',
            'display_order' => 4,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Amélie Bernard',
            'company' => 'Design Studio',
            'position' => 'Directrice Artistique',
            'testimonial' => 'Leur créativité et leur sens du détail sont remarquables. Ils ont su traduire notre vision en une identité visuelle forte et cohérente.',
            'rating' => 5,
            'photo' => null,
            'icon' => null,
            'bg_color' => '#EC4899',
            'display_order' => 5,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Thomas Petit',
            'company' => 'E-commerce Plus',
            'position' => 'CEO',
            'testimonial' => 'Notre boutique en ligne fonctionne parfaitement. Les ventes ont augmenté de 150% depuis le lancement. Merci pour votre professionnalisme !',
            'rating' => 5,
            'photo' => null,
            'icon' => null,
            'bg_color' => '#06B6D4',
            'display_order' => 6,
            'is_active' => true,
        ]);
    }
}
