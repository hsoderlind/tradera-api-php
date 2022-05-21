<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetSellerItemsResult
{
    /**
     * the seller items
     *
     * @var array|null
     */
    public $items = null;

    public function __construct($serviceResult)
    {
        if (isset($serviceResult->GetSellerItemsResult->Item)) {
            $item = $serviceResult->GetSellerItemsResult->Item;
            $this->items = is_array($item) ? $item : [$item];
        }
    }
}
