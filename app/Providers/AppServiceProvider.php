<?php
namespace Cms\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Add @set for Variable Assignment
        /*Blade::directive('set', function($variable, $expression)
        {
            // Strip Open and Close Parenthesis
            if(Str::startsWith($expression, '('))
                $expression = substr($expression, 1, -1);
  
            // Break the Expression into Pieces
            $segments = explode(',', $expression, 2);
  
            // Return the Conversion
            return "<?php " . $segments[0] . " = " . $segments[1] . "; ?>";
        });*/
        /*
         * Set variable.
         *
         * Usage: @set($name, value)
         */
        Blade::directive('set', function ($expression) {
            list($variable, $value) = explode(',', $expression, 2);
            // Ensure variable has no spaces or apostrophes
            $variable = trim(str_replace('\'', '', $variable));
            // Make sure that the variable starts with $
            if (!starts_with($variable, '$')) {
                $variable = '$' . $variable;
            }
            $value = trim($value);
            return "<?php {$variable} = {$value}; ?>";
        });

    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     */
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'Cms\Services\Registrar'
        );
    }
}
