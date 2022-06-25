<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/user/dashboard';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        $this->mapWebAdminRoutes();
        $this->mapWebUserRoutes();
        $this->mapWebSiteRoutes();
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    protected function mapWebAdminRoutes()
    {
        $routeFiles = glob(base_path('routes/web/admin/*.php'));
        foreach ($routeFiles as $routeFile) {
            Route::middleware('web')
                ->group($routeFile);
        }
    }
    protected function mapWebUserRoutes()
    {
        $routeFiles = glob(base_path('routes/web/user/*.php'));
        foreach ($routeFiles as $routeFile) {
            Route::middleware('web')
                ->group($routeFile);
        }
    }

    protected function mapWebSiteRoutes()
    {
        $routeFiles = glob(base_path('routes/web/site/*.php'));
        foreach ($routeFiles as $routeFile) {
            Route::middleware('web')
                ->group($routeFile);
        }
    }
}
