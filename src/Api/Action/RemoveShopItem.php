<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\TraderaRestrictedService;
use Hsoderlind\Tradera\Api\Provider\RemoveShopItemResult;

class RemoveShopItem
{
    /**
     * The id of Shop item to be removed.
     *
     * @var int
     */
    public $shopItemId;

    /**
     * Dispatch this action.
     *
     * @param TraderaRestrictedService $client
     * @return RemoveShopItemResult
     */
    public function dispatch(TraderaRestrictedService $client): RemoveShopItemResult
    {
        return new RemoveShopItemResult($client->RemoveShopItem($this));
    }
}
