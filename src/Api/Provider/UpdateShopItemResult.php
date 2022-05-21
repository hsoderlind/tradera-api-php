<?php

namespace Hsoderlind\Tradera\Api\Provider;

class UpdateShopItemResult extends BaseResultProvider
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
        $this->requestId = $serviceResult->UpdateShopItemResult->RequestId;
        $this->itemId = $serviceResult->UpdateShopItemResult->ItemId;
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
