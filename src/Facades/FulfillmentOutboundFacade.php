<?php

declare(strict_types=1);

namespace MobiMarket\Amazon\Facades;

use Illuminate\Support\Facades\Facade;
use MobiMarket\Amazon\APIClients\FBAOutboundServiceMWS;

class FulfillmentOutboundFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return FBAOutboundServiceMWS::class;
    }
}
