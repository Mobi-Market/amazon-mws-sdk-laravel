<?php

declare(strict_types=1);

use MobiMarket\Amazon\APIClients\FBAInboundServiceMWS;

return [
    /*
     * API Details used for the internal client.
     */
    'api' => [
        'url' => env('AMAZON_MWS_SERVICE_URL', 'https://mws-eu.amazonservices.com/'),

        /*
         * Specific config overrides for any specific client.
         */
        'configs' => [
            FBAInboundServiceMWS::class => [
                // ...
            ],

            // ...
        ],

        /*
         * Specific attribute overrides for any specific client.
         */
        'attributes' => [
            FBAInboundServiceMWS::class => [
                // ...
            ],

            // ...
        ],
    ],

    /*
     * Authentication details for a specific application.
     */
    'auth' => [
        'access_key_id'       => env('AMAZON_MWS_ACCESS_KEY_ID'),
        'access_key_secret'   => env('AMAZON_MWS_ACCESS_KEY_SECRET'),
        'application_name'    => env('AMAZON_MWS_APP_NAME'),
        'application_version' => env('AMAZON_MWS_APP_VERSION'),

        /*
        * Marketplace ID used commonly in some APIs.
        */
        'marketplace_id' => env('AMAZON_MWS_MARKETPLACE_ID'),

        /*
        * Seller ID used commonly in some APIs.
        */
        'seller_id' => env('AMAZON_MWS_SELLER_ID'),
    ],
];
