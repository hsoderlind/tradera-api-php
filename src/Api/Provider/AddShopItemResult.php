<?php

namespace Hsoderlind\Tradera\Api\Provider;

class AddShopItemResult extends BaseResultProvider
{
    /**
     * ID of the added item.
     *
     * @var int
     */
    protected $itemId;

    /**
     * 
     *
     * @param object $serviceResult
     */
    public function __construct($serviceResult)
    {
        $this->requestId = $serviceResult->AddShopItemResult->RequestId;
        $this->itemId = $serviceResult->AddShopItemResult->ItemId;
    }

    /**
     * Get the ID of the added item.
     *
     * @return integer
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
}
