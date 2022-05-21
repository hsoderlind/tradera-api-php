<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetAcceptedBidderTypesResult;

class GetAcceptedBidderTypes
{
    public function dispatch(TraderaPublicService $client): GetAcceptedBidderTypesResult
    {
        return new GetAcceptedBidderTypesResult($client->GetAcceptedBidderTypes());
    }
}
