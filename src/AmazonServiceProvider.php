<?php

declare(strict_types=1);

namespace MobiMarket\Amazon;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use MobiMarket\Amazon\APIClients\FBAInboundServiceMWS;
use MobiMarket\Amazon\APIClients\FBAInventoryServiceMWS;
use MobiMarket\Amazon\APIClients\FBAOutboundServiceMWS;
use MobiMarket\Amazon\APIClients\MarketplaceWebService;
use MobiMarket\Amazon\APIClients\MarketplaceWebServiceOrders;
use MobiMarket\Amazon\APIClients\MarketplaceWebServiceProducts;
use MobiMarket\Amazon\APIClients\MarketplaceWebServiceSellers;
use MobiMarket\Amazon\APIClients\MWSEasyShipSectionService;
use MobiMarket\Amazon\APIClients\MWSFinancesService;
use MobiMarket\Amazon\APIClients\MWSMerchantFulfillmentService;
use MobiMarket\Amazon\APIClients\MWSRecommendationsSectionService;
use MobiMarket\Amazon\APIClients\MWSSubscriptionsService;

class AmazonServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     */
    protected $defer = true;

    /**
     * Array of clients this provides.
     */
    protected $clients = [
        FBAInboundServiceMWS::class,
        FBAInventoryServiceMWS::class,
        FBAOutboundServiceMWS::class,
        MarketplaceWebService::class,
        MarketplaceWebServiceOrders::class,
        MarketplaceWebServiceProducts::class,
        MarketplaceWebServiceSellers::class,
        MWSEasyShipSectionService::class,
        MWSFinancesService::class,
        MWSMerchantFulfillmentService::class,
        MWSRecommendationsSectionService::class,
        MWSSubscriptionsService::class,
    ];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            $this->getConfigPath() => config_path('amazon.php'),
        ], 'amazon');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'amazon');

        foreach ($this->clients as $client) {
            $this->app->singleton($client, function (Application $app) use ($client) {
                $config = $app->make('config');

                $client_config = $config->get('amazon.api.configs.' . $client, []);
                $client_config['ServiceURL'] = $client_config['ServiceURL'] ?? $config->get('amazon.api.url');

                $client_attributes = $config->get('amazon.api.attributes.' . $client, null);

                return new $client(
                    $config->get('amazon.auth.access_key_id') ?? 'KEY_ID',
                    $config->get('amazon.auth.access_key_secret') ?? 'KEY_SECRET',
                    $client_config,
                    $config->get('amazon.auth.application_name') ?? 'Laravel',
                    $config->get('amazon.auth.application_version') ?? $app->version(),
                    $config->get('amazon.auth.marketplace_id'),
                    $config->get('amazon.auth.seller_id'),
                    $client_attributes
                );
            });
        }
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return $this->clients;
    }

    /**
     * Get path to configuration file.
     */
    protected function getConfigPath()
    {
        return $this->getPackageDir() . \DIRECTORY_SEPARATOR . 'config' . \DIRECTORY_SEPARATOR . 'amazon.php';
    }
}
