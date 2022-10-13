<?php

namespace Hsoderlind\Tradera\Api\Provider;

class AddItemResult extends BaseResultProvider
{
    /**
     * @var int
     */
    protected $requestId;

    /**
     * 
     *
     * @param object $serviceResult
     */
    public function __construct($serviceResult)
    {
        $this->requestId = $serviceResult->AddItemResult->RequestId;
    }

    /**
     * Get the ID of the added item.
     *
     * @return integer
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }
}
