<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetCountiesResult;

class GetCounties
{
    public function dispatch(TraderaPublicService $client): GetCountiesResult
    {
        return new GetCountiesResult($client->GetCounties());
    }
}
