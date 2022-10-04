<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetAttributeDefinitionsResult;
use SoapFault;
use stdClass;

class GetAttributeDefinitions
{
    /** @var int */
    protected $categoryId;

    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function dispatch(TraderaPublicService $client): GetAttributeDefinitionsResult
    {
        try {
            $result = $client->GetAttributeDefinitions($this);
            return new GetAttributeDefinitionsResult($result);
        } catch (SoapFault $fault) {
            trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
        }
    }
}
