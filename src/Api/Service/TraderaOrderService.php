<?php

namespace Hsoderlind\Tradera\Api\Service;

use SoapClient;

class TraderaOrderService
{
    use ServiceTrait;

    public function __construct(string $appId, string $appKey, string $userId, string $token)
    {
        $url = 'https://api.tradera.com/v3/OrderService.asmx';

        $this->client = new SoapClient(
            $url . '?WSDL',
            [
                'location' => $url . '?appId=' . $appId . '&appKey=' . $appKey . '&userId=' . $userId . '&token=' . $token,
                'trace' => true
            ]
        );
    }
}
