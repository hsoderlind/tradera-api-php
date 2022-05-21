<?php

namespace Hsoderlind\Tradera\Api\Provider;

abstract class BaseResultProvider
{
    /**
     * The ID of the request that was made
     *
     * @var int
     */
    protected $requestId;

    public function getRequestId()
    {
        return $this->requestId;
    }
}
