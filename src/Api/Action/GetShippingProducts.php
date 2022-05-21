<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaPublicService;

class GetShippingProducts
{
    /**
     * ISO 2 code of the country to list shipping products for.
     *
     * @var string
     */
    public $ToCountryCodeIso2;

    /**
     * Dispatch this action.
     *
     * @param TraderaPublicService $client
     * @return stdClass
     */
    public function dispatch(TraderaPublicService $client): stdClass
    {
        $getShippingProductsParams = new stdClass();
        $getShippingProductsRequest = new stdClass();
        $ToCountryCodeIso2 = new stdClass();
        $ToCountryCodeIso2->string = $this->ToCountryCodeIso2;
        $getShippingProductsRequest->ToCountryCodeIso2 = $ToCountryCodeIso2;
        $getShippingProductsParams->getShippingProductsRequest = $getShippingProductsRequest;

        return $client->GetShippingProducts($getShippingProductsParams);
    }
}
