<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;

class EndItem
{
    /**
     * ID of the item to end.
     *
     * @var int
     */
    public $itemId;

    public function dispatch(TraderaRestrictedService $client): bool
    {
        $endItemParams = new stdClass();
        $endItemParams->ItemId = $this->itemId;

        return $client->EndItem($endItemParams);
    }
}
