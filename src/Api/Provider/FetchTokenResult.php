<?php

namespace Hsoderlind\Tradera\Api\Provider;

class FetchTokenResult
{
    /**
     * The authentication token for the user.
     *
     * @var string
     */
    protected $AuthToken;

    /**
     * Date and time at which the token returned in AuthToken expires
     * and can no longer be used to authenticate the user for the application.
     *
     * @var int
     */
    protected $HardExpirationTime;

    public function __construct($serviceResult)
    {
        $this->AuthToken = $serviceResult->FetchTokenResult->AuthToken;
        $this->HardExpirationTime = $serviceResult->FetchTokenResult->HardExpirationTime;
    }

    public function getAuthToken()
    {
        return $this->AuthToken;
    }

    public function getHardExpirationTime()
    {
        return $this->HardExpirationTime;
    }
}
