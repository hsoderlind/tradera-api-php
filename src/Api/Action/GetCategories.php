<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetCategoriesResult;

class GetCategories
{
    public function dispatch(TraderaPublicService $client): GetCategoriesResult
    {
        return new GetCategoriesResult($client->GetCategories());
    }
}
