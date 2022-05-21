<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaOrderService;
use Hsoderlind\Tradera\Api\Provider\SetSellerOrderAsPaidResult;

class SetSellerOrderAsPaid
{
    /**
     * The ID of the order that is processed.
     *
     * @var int
     */
    public $OrderId;

    public function dispatch(TraderaOrderService $client): SetSellerOrderAsPaidResult
    {
        $setSellerOrderAsPaidParams = new stdClass();
        $request = new stdClass();
        $request->OrderId = $this->OrderId;
        $setSellerOrderAsPaidParams->request = $request;

        return new SetSellerOrderAsPaidResult($client->SetSellerOrderAsPaid($setSellerOrderAsPaidParams));
    }
}
