<?php

declare(strict_types=1);

namespace MobiMarket\Amazon\Facades;

use Illuminate\Support\Facades\Facade;
use MobiMarket\Amazon\APIClients\MarketplaceWebService;

class ReportsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return MarketplaceWebService::class;
    }
}
