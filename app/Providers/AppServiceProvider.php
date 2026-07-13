<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Transaksi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paksa HTTPS di production
        if (app()->isProduction()) {
            URL::forceScheme('https');
        }

        // Jangan jalankan bootstrap database saat console/build
        if (!app()->runningInConsole()) {
            try {
                if (app()->isProduction()) {

                    if (!Schema::hasTable('migrations')) {
                        Artisan::call('migrate', ['--force' => true]);
                    }

                    if (Schema::hasTable('categories') && Category::count() === 0) {
                        Artisan::call('db:seed', ['--force' => true]);
                    }

                    if (!file_exists(public_path('storage'))) {
                        Artisan::call('storage:link');
                    }
                }
            } catch (\Throwable $e) {
                Log::error($e->getMessage());
            }

            try {
                if (Schema::hasTable('transaksis')) {
                    View::share(
                        'pendingOrdersCount',
                        Transaksi::where('status', 'pending')->count()
                    );
                }
            } catch (\Throwable $e) {
                Log::warning($e->getMessage());
            }
        }
    }

    public const HOME = '/admin/dashboard';
}
