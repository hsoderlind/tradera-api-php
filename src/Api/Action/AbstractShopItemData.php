<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Helper\ShopItemImage;
use stdClass;

abstract class AbstractShopItemData
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
    public $OwnReference;

    /**
     * The category Id. See the action GetCategories for all available categories
     *
     * @var int
     */
    public $CategoryId;

    /**
     * A long (7000 chars) description of the item.
     *
     * @var string
     */
    public $Description;

    /**
     * The types of buyers allowed for the Item.
     * See the action GetAcceptedBidderTypes for a list.
     *
     * @var int
     */
    public $AcceptedBuyerId;

    /**
     * VAT for the item.
     * The VAT value can be retrieved from the action GetItemFieldValues .
     *
     * @var int
     */
    public $VAT;

    /**
     * Date when the item will start selling
     *
     * @var string
     */
    public $ActivateDate;

    /**
     * Date when the item will stop selling.
     *
     * @var string
     */
    public $DeactivateDate;

    /**
     * Number of copy of the item in stock
     *
     * @var int
     */
    public $Quantity;

    /**
     * Selling price in kronor.
     *
     * @var int
     */
    public $Price;

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
     * An array of ids of Payment types (more than one can be specified).
     * See the action GetItemFieldValues for a list.
     *
     * @var int[]
     */
    protected $PaymentOptionIds;

    /**
     * Item attributes like: New, Used
     *
     * @var int[]
     */
    protected $ItemAttributes;

    /**
     * Item images
     *
     * @var array
     */
    protected $ItemImages;

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

    public function setItemAttributes(array $itemAttributes)
    {
        $this->ItemAttributes = new stdClass();
        $this->ItemAttributes->int = $itemAttributes;
    }

    public function addItemImage(ShopItemImage $image)
    {
        if (!is_array($this->ItemImages)) {
            $this->ItemImages = array();
        }

        $this->ItemImages[] = $image;
    }
}
