<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Provider\GetOrdersResult;
use Hsoderlind\Tradera\Api\Service\TraderaOrderService;

class GetOrders
{
    /**
     * IDs of the orders to list.
     *
     * @var int[]
     */
    public $orderIds;

    public function dispatch(TraderaOrderService $client): GetOrdersResult
    {
        $getOrdersParams = new stdClass();
        $request = new stdClass();
        $request->OrderIds = [];

        foreach ($this->orderIds as $orderId) {
            $orderIdObj = new stdClass();
            $orderIdObj->int = $orderId;
            $request->OrderIds[] = $orderIdObj;
        }

        $getOrdersParams->request = $request;

        return new GetOrdersResult($client->GetOrders($getOrdersParams));
    }
}
