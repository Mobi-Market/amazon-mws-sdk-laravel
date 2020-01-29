<?php

declare(strict_types=1);

namespace MobiMarket\Amazon\Enums;

final class FeedType
{
    // Enum Values
    public const POST_PRODUCT_DATA                                          = '_POST_PRODUCT_DATA_';
    public const POST_INVENTORY_AVAILABILITY_DATA                           = '_POST_INVENTORY_AVAILABILITY_DATA_';
    public const POST_PRODUCT_OVERRIDES_DATA                                = '_POST_PRODUCT_OVERRIDES_DATA_';
    public const POST_PRODUCT_PRICING_DATA                                  = '_POST_PRODUCT_PRICING_DATA_';
    public const POST_PRODUCT_IMAGE_DATA                                    = '_POST_PRODUCT_IMAGE_DATA_';
    public const POST_PRODUCT_RELATIONSHIP_DATA                             = '_POST_PRODUCT_RELATIONSHIP_DATA_';
    public const POST_FLAT_FILE_INVLOADER_DATA                              = '_POST_FLAT_FILE_INVLOADER_DATA_';
    public const POST_FLAT_FILE_LISTINGS_DATA                               = '_POST_FLAT_FILE_LISTINGS_DATA_';
    public const POST_FLAT_FILE_BOOKLOADER_DATA                             = '_POST_FLAT_FILE_BOOKLOADER_DATA_';
    public const POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA                   = '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_';
    // public const POST_FLAT_FILE_LISTINGS_DATA                               = '_POST_FLAT_FILE_LISTINGS_DATA_';
    public const POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA            = '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_';
    public const POST_UIEE_BOOKLOADER_DATA                                  = '_POST_UIEE_BOOKLOADER_DATA_';
    public const POST_STD_ACES_DATA                                         = '_POST_STD_ACES_DATA_';
    public const POST_ORDER_ACKNOWLEDGEMENT_DATA                            = '_POST_ORDER_ACKNOWLEDGEMENT_DATA_';
    public const POST_PAYMENT_ADJUSTMENT_DATA                               = '_POST_PAYMENT_ADJUSTMENT_DATA_';
    public const POST_ORDER_FULFILLMENT_DATA                                = '_POST_ORDER_FULFILLMENT_DATA_';
    public const POST_INVOICE_CONFIRMATION_DATA                             = '_POST_INVOICE_CONFIRMATION_DATA_';
    public const POST_EXPECTED_SHIP_DATE_SOD                                = '_POST_EXPECTED_SHIP_DATE_SOD_';
    public const POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA                  = '_POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA_';
    public const POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA                     = '_POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA_';
    public const POST_FLAT_FILE_FULFILLMENT_DATA                            = '_POST_FLAT_FILE_FULFILLMENT_DATA_';
    public const POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE                      = '_POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE_';
    public const POST_FULFILLMENT_ORDER_REQUEST_DATA                        = '_POST_FULFILLMENT_ORDER_REQUEST_DATA_';
    public const POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA           = '_POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    public const POST_FBA_INBOUND_CARTON_CONTENTS                           = '_POST_FBA_INBOUND_CARTON_CONTENTS_';
    public const POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA              = '_POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA_';
    public const POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA = '_POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    public const POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN                     = '_POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN_';
    public const POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN                     = '_POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN_';
    public const POST_FLAT_FILE_FBA_CREATE_REMOVAL                          = '_POST_FLAT_FILE_FBA_CREATE_REMOVAL_';
    public const RFQ_UPLOAD_FEED                                            = '_RFQ_UPLOAD_FEED_';
    public const POST_EASYSHIP_DOCUMENTS                                    = '_POST_EASYSHIP_DOCUMENTS_';

    // Named Values
    public const PRODUCT_FEED                                      = '_POST_PRODUCT_DATA_';
    public const INVENTORY_FEED                                    = '_POST_INVENTORY_AVAILABILITY_DATA_';
    public const OVERRIDES_FEED                                    = '_POST_PRODUCT_OVERRIDES_DATA_';
    public const PRICING_FEED                                      = '_POST_PRODUCT_PRICING_DATA_';
    public const PRODUCT_IMAGES_FEED                               = '_POST_PRODUCT_IMAGE_DATA_';
    public const RELATIONSHIPS_FEED                                = '_POST_PRODUCT_RELATIONSHIP_DATA_';
    public const FLAT_FILE_INVENTORY_LOADER_FEED                   = '_POST_FLAT_FILE_INVLOADER_DATA_';
    public const FLAT_FILE_LISTINGS_FEED                           = '_POST_FLAT_FILE_LISTINGS_DATA_';
    public const FLAT_FILE_BOOK_LOADER_FEED                        = '_POST_FLAT_FILE_BOOKLOADER_DATA_';
    public const FLAT_FILE_MUSIC_LOADER_FEED                       = '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_';
    public const FLAT_FILE_VIDEO_LOADER_FEED                       = '_POST_FLAT_FILE_LISTINGS_DATA_';
    public const FLAT_FILE_PRICE_AND_QUANTITY_UPDATE_FEED          = '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_';
    public const UIEE_INVENTORY_FEED                               = '_POST_UIEE_BOOKLOADER_DATA_';
    public const ACES30_DATA_FEED                                  = '_POST_STD_ACES_DATA_';
    public const ORDER_ACKNOWLEDGEMENT_FEED                        = '_POST_ORDER_ACKNOWLEDGEMENT_DATA_';
    public const ORDER_ADJUSTMENT_FEED                             = '_POST_PAYMENT_ADJUSTMENT_DATA_';
    public const ORDER_FULFILLMENT_FEED                            = '_POST_ORDER_FULFILLMENT_DATA_';
    public const INVOICE_CONFIRMATION_FEED                         = '_POST_INVOICE_CONFIRMATION_DATA_';
    public const SOURCE_ON_DEMAND_FEED                             = '_POST_EXPECTED_SHIP_DATE_SOD_';
    public const FLAT_FILE_ORDER_ACKNOWLEDGEMENT_FEED              = '_POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA_';
    public const FLAT_FILE_ORDER_ADJUSTMENTS_FEED                  = '_POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA_';
    public const FLAT_FILE_ORDER_FULFILLMENT_FEED                  = '_POST_FLAT_FILE_FULFILLMENT_DATA_';
    public const FLAT_FILE_SOURCING_ON_DEMAND_FEED                 = '_POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE_';
    public const FBA_FULFILLMENT_ORDER_FEED                        = '_POST_FULFILLMENT_ORDER_REQUEST_DATA_';
    public const FBA_FULFILLMENT_ORDER_CANCELLATION_FEED           = '_POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    public const FBA_INBOUND_SHIPMENT_CARTON_INFORMATION_FEED      = '_POST_FBA_INBOUND_CARTON_CONTENTS_';
    public const FLAT_FILE_FBA_FULFILLMENT_ORDER_FEED              = '_POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA_';
    public const FLAT_FILE_FBA_FULFILLMENT_ORDER_CANCELLATION_FEED = '_POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    public const FLAT_FILE_FBA_CREATE_INBOUND_SHIPMENT_PLAN_FEED   = '_POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN_';
    public const FLAT_FILE_FBA_update_INBOUND_SHIPMENT_PLAN_FEED   = '_POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN_';
    public const FLAT_FILE_FBA_CREATE_REMOVAL_FEED                 = '_POST_FLAT_FILE_FBA_CREATE_REMOVAL_';
    public const FLAT_FILE_MANAGE_QUOTES_FEED                      = '_RFQ_UPLOAD_FEED_';
    public const EASY_SHIP_FEED                                    = '_POST_EASYSHIP_DOCUMENTS_';
}
