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

    /** @var bool */
    protected $debug = false;

    /** @var callable|string */
    protected $logger;

    public function __call(string $name, ?array $args = null): mixed
    {
        try {
            $result = $this->client->$name(...$args);

            $this->doDebug();

            return $result;
        } catch (SoapFault $ex) {
            $this->doDebug();
            $req = $this->client->__getLastRequest();
            trigger_error("SOAP Fault: (faultcode: {$ex->faultcode}, faultstring: {$ex->faultstring}). Req {$req}", E_USER_ERROR);
        }
    }

    public function debugRequest(): ?string
    {
        return $this->client->__getLastRequest();
    }

    public function debugResponse(): ?string
    {
        return $this->client->__getLastResponse();
    }

    protected function doDebug()
    {
        if (!$this->debug) {
            return;
        }
        
        if (is_callable($this->logger)) {
            call_user_func($this->logger, 'request', $this->debugRequest());
            call_user_func($this->logger, 'response', $this->debugResponse());
            return;
        }

        if (file_exists($this->logger)) {
            file_put_contents("{$this->logger}/tradera-request", $this->debugRequest());
            file_put_contents("{$this->logger}/tradera-response", $this->debugResponse());
        }
    }
}
