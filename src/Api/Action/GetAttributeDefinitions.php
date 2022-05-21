<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetAttributeDefinitionsResult;

class GetAttributeDefinitions
{
    public function dispatch(TraderaPublicService $client): GetAttributeDefinitionsResult
    {
        return new GetAttributeDefinitionsResult($client->GetAttributeDefinitions());
    }
}
