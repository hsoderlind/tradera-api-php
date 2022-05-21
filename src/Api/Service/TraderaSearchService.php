<?php

namespace Hsoderlind\Tradera\Api\Service;

use SoapClient;

class TraderaSearchService
{
    use ServiceTrait;

    public function __construct(string $appId, string $appKey)
    {
        $url = 'https://api.tradera.com/v3/OrderService.asmx';

        $this->client = new SoapClient(
            $url . '?WSDL',
            [
                'location' => $url . '?appId=' . $appId . '&appKey=' . $appKey,
                'trace' => true
            ]
        );
    }
}
