<?php

declare(strict_types=1);

namespace MobiMarket\Amazon\Facades;

use Illuminate\Support\Facades\Facade;
use MobiMarket\Amazon\APIClients\FBAInboundServiceMWS;
use MobiMarket\Amazon\APIClients\Interfaces\IFBAInboundServiceMWS;

class FulfillmentInboundFacade extends Facade implements IFBAInboundServiceMWS
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return FBAInboundServiceMWS::class;
    }
}
