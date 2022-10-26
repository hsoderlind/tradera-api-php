<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;
use stdClass;

class GetRequestResults
{
    /**
     * ID of the request that was returned from dispatching AddIte mor AddShopItem.
     *
     * @var int
     */
    public $requestId;

    /**
     * Dispatch this action.
     *
     * @param TraderaRestrictedService $client
     * @return stdClass
     */
    public function dispatch(TraderaRestrictedService $client): stdClass
    {
        $getRequestResultParams = new stdClass();
        $getRequestResultParams->requestIds->int = array($this->requestId);

        return $client->GetRequestResults($getRequestResultParams);
    }
}
