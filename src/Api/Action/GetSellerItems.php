<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;
use Hsoderlind\Tradera\Api\Provider\GetSellerItemsResult;
use stdClass;

class GetSellerItems
{
    const FILTER_TYPE_ALL = 'All';
    const FILTER_TYPE_AUCTION = 'Auction';
    const FILTER_TYPE_PURE_BUY_IT_NOW = 'PureBuyItNow';
    const FILTER_TYPE_SHOP_ITEM = 'ShopItem';

    const FILTER_ACTIVE_ALL = 'All';
    const FILTER_ACTIVE_ACTIVE = 'Active';
    const FILTER_ACTIVE_INACTIVE = 'Inactive';

    /**
     * The Id of the category to look for items in (use 0 for all categories)
     * eg. 344481 for test item category
     *
     * @var int
     */
    public $categoryId;

    /**
     * Item types to return:
     * - "All"
     * - "Auction"
     * - "PureBuyItNow"
     * - "ShopItem"
     * 
     * Can be overridden with either the minEndDate or maxEndate parameters.
     *
     * @var string
     */
    public $filterItemType;

    /**
     * The filter to use:
     * - "All" = All,
     * - "Active" = Only active items (EndDate > NOW),
     * - "Inactive" = Only inactive items (EndDate < NOW)
     *
     * @var string
     */
    public $filterActive;

    /**
     * Will return items with EndDate > than this parameter.
     *
     * @var int|null
     */
    public $minEndDate = null;

    /**
     * Will return items with EndDate < than this parameter.
     *
     * @var int|null
     */
    public $maxEndDate = null;

    /**
     * Dispatch this action.
     *
     * @param TraderaRestrictedService $client
     * @return GetSellerItemsResult
     */
    public function dispatch(TraderaRestrictedService $client): GetSellerItemsResult
    {
        return new GetSellerItemsResult($client->GetSellerItems($this));
    }
}
