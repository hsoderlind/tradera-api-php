<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;
use stdClass;

class GetUserInfo
{
    public function dispatch(TraderaRestrictedService $client): stdClass
    {
        return $client->GetUserInfo();
    }
}
