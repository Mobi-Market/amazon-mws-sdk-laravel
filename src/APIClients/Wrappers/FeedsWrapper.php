<?php

declare(strict_types=1);

namespace MobiMarket\Amazon\APIClients\Wrappers;

use DateTime;
use League\Csv\Writer as CsvWriter;
use MobiMarket\Amazon\APIClients\MarketplaceWebService;
use MobiMarket\Amazon\Enums\FeedType;
use MobiMarket\Amazon\Models\FeedSubmissionInfo;
use MobiMarket\Amazon\Models\IdList;
use MobiMarket\Amazon\Models\SubmitFeedRequest;
use Spatie\ArrayToXml\ArrayToXml;
use SplTempFileObject;

class FeedsWrapper extends MarketplaceWebService
{
    /**
     * @var bool
     */
    protected $_purgeAndReplace = false;

    /**
     * Update a product's stock quantity.
     *
     * @param array $array array containing sku as key and quantity as value
     */
    public function updateStock(array $array): FeedSubmissionInfo
    {
        $feed = [
            'MessageType' => 'Inventory',
            'Message'     => [],
        ];

        foreach ($array as $sku => $quantity) {
            $feed['Message'][] = [
                'MessageID'     => random_int(0, getrandmax()),
                'OperationType' => 'Update',
                'Inventory'     => [
                    'SKU'      => $sku,
                    'Quantity' => (int) $quantity,
                ],
            ];
        }

        return $this->_invokeFeed(FeedType::INVENTORY_FEED, $feed);
    }

    /**
     * Update a product's price.
     *
     * @param array $standardprice an array containing sku as key and price as value
     * @param array $saleprice     an optional array with sku as key and value consisting of an array with key/value pairs for SalePrice, StartDate, EndDate
     *                             Dates in DateTime object
     *                             Price has to be formatted as XSD Numeric Data Type (http://www.w3schools.com/xml/schema_dtypes_numeric.asp)
     */
    public function updatePrice(array $standardprice, ?array $saleprice = null): FeedSubmissionInfo
    {
        $feed = [
            'MessageType' => 'Price',
            'Message'     => [],
        ];

        foreach ($standardprice as $sku => $price) {
            $message = [
                'MessageID' => random_int(0, getrandmax()),
                'Price'     => [
                    'SKU'           => $sku,
                    'StandardPrice' => [
                        '_value'      => (string) $price,
                        '_attributes' => [
                            'currency' => 'DEFAULT',
                        ],
                    ],
                ],
            ];

            if (\is_array($saleprice[$sku])) {
                $message['Price']['Sale'] = [
                    'StartDate' => $saleprice[$sku]['StartDate']->format(DateTime::ISO8601),
                    'EndDate'   => $saleprice[$sku]['EndDate']->format(DateTime::ISO8601),
                    'SalePrice' => [
                        '_value'      => (string) ($saleprice[$sku]['SalePrice']),
                        '_attributes' => [
                            'currency' => 'DEFAULT',
                        ], ],
                ];
            }

            $feed['Message'][] = $message;
        }

        return $this->_invokeFeed(FeedType::PRICING_FEED, $feed);
    }

    /**
     * Post to create or update a product (_POST_FLAT_FILE_LISTINGS_DATA_).
     *
     * @param object[]|object $products or array of MWSProduct objects
     */
    public function postProduct($products): FeedSubmissionInfo
    {
        if (!\is_array($products)) {
            $products = [$products];
        }

        $csv = CsvWriter::createFromFileObject(new SplTempFileObject());

        $csv->setDelimiter("\t");
        $csv->setInputEncoding('iso-8859-1');

        $csv->insertOne(['TemplateType=Offer', 'Version=2014.0703']);

        $header = ['sku', 'price', 'quantity', 'product-id',
            'product-id-type', 'condition-type', 'condition-note',
            'ASIN-hint', 'title', 'product-tax-code', 'operation-type',
            'sale-price', 'sale-start-date', 'sale-end-date', 'leadtime-to-ship',
            'launch-date', 'is-giftwrap-available', 'is-gift-message-available',
            'fulfillment-center-id', 'main-offer-image', 'offer-image1',
            'offer-image2', 'offer-image3', 'offer-image4', 'offer-image5',
        ];

        $csv->insertOne($header);
        $csv->insertOne($header);

        foreach ($products as $product) {
            $csv->insertOne(
                array_values($product->toArray())
            );
        }

        return $this->_invokeFeed(FeedType::FLAT_FILE_LISTINGS_FEED, $csv);
    }

    /**
     * @param mixed $value
     */
    public function overrideConfig(string $var, $value): void
    {
        if ('PurgeAndReplace' !== $var) {
            throw new \Exception('Not implemented');
        }

        $this->_purgeAndReplace = (bool) $value;
    }

    /**
     * Uploads a feed for processing by Amazon MWS.
     *
     * @param string       $type    (http://docs.developer.amazonservices.com/en_US/feeds/Feeds_FeedType.html)
     * @param array|string $content Array will be converted to xml using https://github.com/spatie/array-to-xml. Strings will not be modified.
     * @param bool         $debug   Return the generated xml and don't send it to amazon
     *
     * @return FeedSubmissionInfo|string
     */
    protected function _invokeFeed(string $type, $content, bool $debug = false)
    {
        if (\is_array($content)) {
            $content = array_merge([
                'Header' => [
                    'DocumentVersion'    => 1.01,
                    'MerchantIdentifier' => $this->_sellerId,
                ],
            ], $content);

            $content = $this->_arrayToXml($content);
        }

        if ($debug) {
            return $content;
        }

        $marketplaceIdList = (new IdList())
            ->withId([
                $this->_marketplaceId,
            ]);

        // $hash = base64_encode(md5($body, true));

        $request = (new SubmitFeedRequest())
            ->withFeedType($type)
            ->withFeedContent($content)
            // ->withContentMd5($hash)
            ->withPurgeAndReplace($this->_purgeAndReplace)
            ->withMerchant($this->_sellerId)
            ->withMarketplaceIdList($marketplaceIdList);

        return $this->submitFeed($request)
            ->getSubmitFeedResult()
            ->getFeedSubmissionInfo();
    }

    /**
     * Convert an array to xml.
     */
    protected function _arrayToXml(array $array, string $customRoot = 'AmazonEnvelope'): string
    {
        return ArrayToXml::convert($array, $customRoot);
    }
}
