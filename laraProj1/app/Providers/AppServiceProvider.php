<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */


    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Definisci la direttiva @active
        Blade::directive('active', function ($expression) {
            return "<?php echo request()->is($expression) ? 'active' : ''; ?>";
        });
    }
}
