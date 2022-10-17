<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;
use Hsoderlind\Tradera\Api\Provider\AddItemResult;

use stdClass;

/**
 * This action adds a new item to Tradera.
 */
class AddItem
{
    /**
     * The title (short description) of the item (80 chars)
     *
     * @var string
     */
    public $Title;

    /**
     * The sellers own references for this Item (60 chars)
     *
     * @var string
     */
    public $OwnReferences;

    /**
     * The category Id. See the action GetCategories for all available categories
     *
     * @var int
     */
    public $CategoryId;

    /**
     * How long the auction should be available (1-14 days).
     * Note that this property will always be set to 30 days if ItemType property is set to PureBuyItNow type.
     *
     * @var int
     */
    public $Duration;

    /**
     * How many times the item/auction should be allowed to restart if not sold (0-2).
     * A restart will incur the same fees as a new auction.
     *
     * @var int
     */
    public $Restarts;

    /**
     * The start price (utropspris) in kronor.
     *
     * @var int
     */
    public $StartPrice;

    /**
     * The reserve price (the lowest price that the Item can be sold for), if any, in kronor.
     *
     * @var int
     */
    public $ReservePrice = 0;

    /**
     * A price that the Item can be bought for immediately, if any, in kronor.
     *
     * @var int
     */
    public $BuyItNowPrice = 0;

    /**
     * A long (7000 chars) description of the item.
     *
     * @var string
     */
    public $Description;

    /**
     * The types of bidders allowed for the Item.
     * See the action GetAcceptedBidderTypes for a list.
     *
     * @var int
     */
    public $AcceptedBidderId;

    /**
     * When the auction should end, will override Duration if set. CustomEndDate costs extra.
     * Note that this property is not used if ItemType property is set to PureBuyItNow type. 
     * Duration will always be set to 30 days for PureBuyItNow type.
     *
     * @var string
     */
    public $CustomEndDate;

    /**
     * An array of ids of Payment types (more than one can be specified).
     * See the action GetItemFieldValues for a list.
     *
     * @var int[]
     */
    protected $PaymentOptionIds;

    /**
     * A list of shipping options offered to the buyer of the Item.
     * At most 3 shipping options are allowed if Pickup is included. 
     * Otherwise, at most 2 shipping options are allowed. 
     * See action ItemShipping.
     *
     * @var stdClass
     */
    protected $ShippingOptions;

    /**
     * An array of Expo item Ids, used if for example bold text is desired.
     * See the action GetExpoItemTypes for a list.
     *
     * @var int[]
     */
    protected $ExpoItemIds;

    /**
     * Item attributes like: New, Used
     *
     * @var int[]
     */
    protected $ItemAttributes;

    /**
     * The type of Item.
     * See the action GetItemTypes for a list.
     *
     * @var int
     */
    public $ItemType;

    /**
     * If the item should be available for import into the Tradera system at once.
     * Set this property to false if images are going to be added to the item.
     *
     * @var boolean
     */
    public $AutoCommit = true;

    /**
     * VAT for the item.
     * The VAT value can be retrieved from the action GetItemFieldValues .
     *
     * @var int
     */
    public $VAT;

    /**
     * Describes Shipping condition for this Item (500 chars)
     *
     * @var string
     */
    public $ShippingCondition;

    /**
     * Describes Payment condition for this Item (500 chars)
     *
     * @var string
     */
    public $PaymentCondition;

    public function setPaymentOptionIds(array $paymentOptionIds)
    {
        $paymentOptionIdsObj = new stdClass();
        $paymentOptionIdsObj->int = $paymentOptionIds;
        $this->PaymentOptionIds = $paymentOptionIdsObj;
    }

    public function setShippingOptions(array $shippingOptions)
    {
        $shippingOptionsArr = [];

        foreach ($shippingOptions as $shippingOption) {
            $entry = new stdClass();
            $entry->ShippingOptionId = $shippingOption[0];
            $entry->Cost = $shippingOption[1];
            $shippingOptionsArr[] = $entry;
        }

        $this->ShippingOptions = new stdClass();
        $this->ShippingOptions->ItemShipping = $shippingOptionsArr;
    }

    public function setExpoItemIds(array $expoItemIds)
    {
        $this->ExpoItemIds = new stdClass();
        $this->ExpoItemIds->int = $expoItemIds;
    }

    public function setItemAttributes(array $itemAttributes)
    {
        $this->ItemAttributes = new stdClass();
        $this->ItemAttributes->int = $itemAttributes;
    }

    /**
     * Dispatch this action
     *
     * @param TraderaRestrictedService $client
     * @return AddItemResult
     */
    public function dispatch(TraderaRestrictedService $client): AddItemResult
    {
        $addItemParams = new stdClass();
        $itemRequest = new stdClass();

        foreach ($this as $prop => $value) {
            $itemRequest->$prop = $value;
        }

        $addItemParams->itemRequest = $itemRequest;

        return new AddItemResult($client->AddItem($addItemParams));
    }
}
