<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetExpoItemTypesResult;

class GetExpoItemTypes
{
    public function dispatch(TraderaPublicService $client): GetExpoItemTypesResult
    {
        return new GetExpoItemTypesResult($client->GetExpoItemTypes());
    }
}
