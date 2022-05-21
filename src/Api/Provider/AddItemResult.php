<?php

namespace Hsoderlind\Tradera\Api\Provider;

class AddItemResult extends BaseResultProvider
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
        $this->requestId = $serviceResult->AddItemResult->RequestId;
        $this->itemId = $serviceResult->AddItemResult->ItemId;
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
