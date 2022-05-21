<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetItemTypesResult
{
    /**
     * An aray of objects representing the ID, description and value of each item type.
     *
     * @var array
     */
    protected $IdDescriptionPair = [];

    public function __construct($serviceResult)
    {
        $this->IdDescriptionPair = $serviceResult->GetItemTypesResult->IdDescriptionPair;
    }

    public function getIdDescriptionPair()
    {
        return $this->IdDescriptionPair;
    }
}
