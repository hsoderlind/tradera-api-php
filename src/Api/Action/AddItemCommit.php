<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;

class AddItemCommit
{
    /**
     * ID provided by AddItemResult
     *
     * @var int
     */
    public $requestId;

    public function dispatch(TraderaRestrictedService $client)
    {
        $client->AddItemCommit($this);
    }
}
