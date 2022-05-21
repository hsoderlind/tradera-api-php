<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetItemFieldValuesResult;

class GetItemFieldValues
{
    public function dispatch(TraderaPublicService $client): GetItemFieldValuesResult
    {
        return new GetItemFieldValuesResult($client->GetItemFieldValues());
    }
}
