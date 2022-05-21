<?php

namespace Hsoderlind\Tradera\Api\Provider;

class SetSellerOrderAsPaidResult
{
    protected $orderId;

    public function __construct($serviceResult)
    {
        $this->orderId = $serviceResult->SetSellerOrderAsPaidResult->OrderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }
}
