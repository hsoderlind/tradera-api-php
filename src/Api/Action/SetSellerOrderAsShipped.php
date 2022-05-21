<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaOrderService;
use Hsoderlind\Tradera\Api\Provider\SetSellerOrderAsShippedResult;

class SetSellerOrderAsShipped
{
    /**
     * The ID of the order that is processed.
     *
     * @var int
     */
    public $OrderId;

    public function dispatch(TraderaOrderService $client): SetSellerOrderAsShippedResult
    {
        $setSellerOrderAsShippedParams = new stdClass();
        $request = new stdClass();
        $request->OrderId = $this->OrderId;
        $setSellerOrderAsShippedParams->request = $request;

        return new SetSellerOrderAsShippedResult($client->SetSellerOrderAsShipped($setSellerOrderAsShippedParams));
    }
}
