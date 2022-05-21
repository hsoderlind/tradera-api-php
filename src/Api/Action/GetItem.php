<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;

class GetItem
{
    /**
     * ID of the item to get.
     *
     * @var int
     */
    public $itemId;

    public function dispatch(TraderaRestrictedService $client): stdClass
    {
        $getItemParams = new stdClass();
        $getItemParams->ItemId = $this->itemId;

        return $client->GetItem($getItemParams);
    }
}
