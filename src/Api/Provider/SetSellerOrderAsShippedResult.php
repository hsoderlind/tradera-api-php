<?php

namespace Hsoderlind\Tradera\Api\Provider;

class SetSellerOrderAsShippedResult
{
    protected $orderId;

    public function __construct($serviceResult)
    {
        $this->orderId = $serviceResult->SetSellerOrderAsShippedResult->OrderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }
}
