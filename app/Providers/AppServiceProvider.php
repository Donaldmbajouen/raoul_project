<?php

namespace App\Providers;

use App\Models\Partner;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Définit la longueur par défaut des chaînes de caractères
        Schema::defaultStringLength(191);

        // Injecte les partenaires actifs dans le composant partners-section
        View::composer('components.partners-section', function ($view) {
            $view->with('partners', Partner::where('is_active', true)->orderBy('order')->orderBy('name')->get());
        });
    }
}
