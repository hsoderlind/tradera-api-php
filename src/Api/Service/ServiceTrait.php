<?php

namespace Hsoderlind\Tradera\Api\Service;

use SoapFault;

/**
 * 
 */
trait ServiceTrait
{
    /**
     * @var \SoapClient
     */
    protected $client;

    public function __call(string $name, ?array $args = null): mixed
    {
        try {
            $result = $this->client->$name(...$args);
            return $result;
        } catch (SoapFault $ex) {
            $req = $this->client->__getLastRequest();
            trigger_error("SOAP Fault: (faultcode: {$ex->faultcode}, faultstring: {$ex->faultstring}). Req {$req}", E_USER_ERROR);
        }
    }
}
