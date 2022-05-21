<?php

namespace Hsoderlind\Tradera\Api\Action;

use stdClass;
use Hsoderlind\Tradera\Api\Service\TraderaOrderService;
use Hsoderlind\Tradera\Api\Provider\GetSellerOrdersResult;

class GetSellerOrders
{
    /**
     * The filter will target the order's created date. Note that an order can be updated. For example an order can
     * be paid some time after its creation. If there is a requirement to receive order
     * payments, use LastUpdatedDate filter instead to receive updated orders.
     */
    const DATE_MODE_CREATED_DATE = 'CreatedDate';

    /**
     * The filter will target the order's last updated date.
     */
    const DATE_MODE_LAST_UPDATED_DATE = 'LastUpdatedDate';

    /**
     * ISO 8601 DateTime.
     * Used to retrieve orders that are created and/or updated after this date. 
     * This field can be used together with ToDate to retrive orders within a certain time range.
     * This field is optional, if it is not used send NULL.
     *
     * @var string
     */
    public $FromDate;

    /**
     * ISO 8601 DateTime.
     * Used to retrieve orders that are created and/or updated before this date. 
     * This field can be used together with FromDate to retrive orders within a certain time range.
     * This field is optional, if it is not used send NULL.
     *
     * @var string
     */
    public $ToDate;

    /**
     * Determines what date on the orders the FromDate and ToDate parameters should target.
     * - CreatedDate: Specifies that the FromDate and ToDate parameters will filter only on the orders' created date.
     * - LastUpdatedDate: Specifies that the FromDate and ToDate parameters will filter only on the orders' last updated date.
     * Note, this will also return orders created in the specified date interval since when a order is created
     * the created date and last updated date is the same.
     *
     * @var string
     */
    public $QueryDateMode;

    /**
     * Dispatch this action.
     *
     * @param TraderaOrderService $client
     * @return GetSellerOrdersResult
     */
    public function dispatch(TraderaOrderService $client): GetSellerOrdersResult
    {
        $getSellerOrdersParams = new stdClass();
        $request = new stdClass();

        foreach ($this as $prop => $value) {
            $request->$prop = $value;
        }

        $getSellerOrdersParams->request = $request;

        return new GetSellerOrdersResult($client->GetSellerOrders($getSellerOrdersParams));
    }
}
