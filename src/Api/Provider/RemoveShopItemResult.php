<?php

namespace Hsoderlind\Tradera\Api\Provider;

class RemoveShopItemResult extends BaseResultProvider
{
    /**
     * The id of the item that the request is operating on.
     *
     * @var int
     */
    protected $itemId;

    public function __construct($serviceResult)
    {
        $this->requestId = $serviceResult->RemoveShopItemResult->RequestId;
        $this->itemId = $serviceResult->RemoveShopItemResult->ItemId;
    }

    /**
     * The id of the item that the request is operating on.
     *
     * @return integer
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
}
