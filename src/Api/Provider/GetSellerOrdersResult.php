<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetSellerOrdersResult
{
    /**
     * The seller's orders
     *
     * @var array
     */
    protected $sellerOrders;

    public function __construct($serviceRequest)
    {
        $this->sellerOrders = $serviceRequest->GetSellerOrdersResult->SellerOrders->SellerOrder;
    }

    public function getSellerOrders()
    {
        return $this->sellerOrders;
    }
}
