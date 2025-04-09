<?php

namespace App\Providers;

use Core\Cards\Application\CreditCardFactory;
use Core\Cards\Domain\Contracts\CreditCardFactoryInterface;
use Core\Cards\Domain\Contracts\CreditCardManagerInterface;
use Core\Cards\Domain\Contracts\CreditCardRepositoryInterface;
use Core\Cards\Infrastructure\Persistence\Repositories\EloquentCreditCardRepository;
use Core\Cards\Infrastructure\Services\CreditCardManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Definition DI Factory Credit card
        $this->app->singletonIf(CreditCardFactoryInterface::class, CreditCardFactory::class);

        // Definition DI Manager Credit card
        $this->app->singletonIf(CreditCardManagerInterface::class, CreditCardManager::class);

        // Definition DI Repository Credit card
        $this->app->singletonIf(CreditCardRepositoryInterface::class, EloquentCreditCardRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
