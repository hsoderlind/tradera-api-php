<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;
use Hsoderlind\Tradera\Api\Provider\UpdateShopItemResult;

class UpdateShopItem extends AbstractShopItemData
{
    /**
     * ID of the item to update.
     *
     * @var int
     */
    public $ItemId;

    public function dispatch(TraderaRestrictedService $client): UpdateShopItemResult
    {
        $updateShopItemParams = new stdClass();
        $shopItemData = new stdClass();

        foreach ($this as $prop => $value) {
            $shopItemData->$prop = $value;
        }

        $updateItem = new stdClass();
        $updateItem->ItemData = $shopItemData;
        $updateItem->ItemId = $this->ItemId;

        $updateShopItemParams->updateData = $updateItem;

        return new UpdateShopItemResult($client->UpdateShopItem($updateShopItemParams));
    }
}
