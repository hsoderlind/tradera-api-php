<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaPublicService;
use Hsoderlind\Tradera\Api\Provider\GetAttributeDefinitionsResult;
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
        return new GetAttributeDefinitionsResult($client->GetAttributeDefinitions($this));
    }
}
