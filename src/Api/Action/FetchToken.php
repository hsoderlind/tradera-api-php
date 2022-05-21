<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\FetchTokenResult;
use stdClass;

class FetchToken
{
    /**
     * The Id of the user
     *
     * @var string|int
     */
    public $userId;

    /**
     * The secret key used when the token was created
     *
     * @var string
     */
    public $secretKey;

    public function __construct(string $userId, string $secretKey)
    {
        $this->userId = $userId;
        $this->secretKey = $secretKey;
    }

    public function dispatch(TraderaPublicService $client): FetchTokenResult
    {
        return new FetchTokenResult($client->FetchToken($this));
    }
}
