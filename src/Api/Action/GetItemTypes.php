<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetItemTypesResult;

class GetItemTypes
{
    public function dispatch(TraderaPublicService $client): GetItemTypesResult
    {
        return new GetItemTypesResult($client->GetItemTypes());
    }
}
