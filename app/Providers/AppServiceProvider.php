<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureModels();
        $this->configureDates();
        $this->configureRoutes();
    }

    private function configureModels(): void
    {
        Model::unguard();

        Model::shouldBeStrict(! app()->isProduction());

        Model::automaticallyEagerLoadRelationships();
    }

    private function configureDates(): void
    {
        Date::use(CarbonImmutable::class);
    }

    private function configureRoutes(): void
    {
        URL::forceHttps(app()->isProduction());
    }
}
