<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;
use Hsoderlind\Tradera\Api\Provider\AddShopItemResult;

class AddShopItem extends AbstractShopItemData
{
    /**
     * Dispatch this action.
     *
     * @param TraderaRestrictedService $client
     * @return AddShopItemResult
     */
    public function dispatch(TraderaRestrictedService $client): AddShopItemResult
    {
        $addShopItemParams = new stdClass();
        $shopItemData = new stdClass();

        foreach ($this as $prop => $value) {
            $shopItemData->$prop = $value;
        }

        $addShopItemParams->ShopItemData = $shopItemData;

        return new AddShopItemResult($client->AddShopItem($addShopItemParams));
    }
}
