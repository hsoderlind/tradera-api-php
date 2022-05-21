<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetAttributeDefinitionsResult
{
    /**
     * 
     *
     * @var array
     */
    protected $AttributeDefinitions = [];

    public function __construct($serviceResult)
    {
        $this->AttributeDefinitions = $serviceResult->GetAttributeDefinitionsResult->AttributeDefinition;
    }

    public function getAttributeDefinitions()
    {
        return $this->AttributeDefinitions;
    }
}
