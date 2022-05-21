<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetOrdersResult
{
    /**
     * The seller's orders
     *
     * @var array
     */
    protected $sellerOrders;

    public function __construct($serviceRequest)
    {
        $this->sellerOrders = $serviceRequest->GetOrdersResult->SellerOrders->SellerOrder;
    }

    public function getSellerOrders()
    {
        return $this->sellerOrders;
    }
}
