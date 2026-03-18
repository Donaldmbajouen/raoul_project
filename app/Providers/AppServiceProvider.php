<?php

namespace App\Providers;

use App\Models\Partner;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Injecte les partenaires actifs dans le composant partners-section
        View::composer('components.partners-section', function ($view) {
            $view->with('partners', Partner::where('is_active', true)->orderBy('order')->orderBy('name')->get());
        });
    }
}
