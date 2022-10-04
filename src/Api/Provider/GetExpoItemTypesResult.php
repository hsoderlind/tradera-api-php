<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetExpoItemTypesResult
{
    /**
     * An aray of objects representing the ID, description and value of each expo item types.
     *
     * @var array
     */
    protected $IdDescriptionPair = [];

    public function __construct($serviceResult)
    {
        $this->IdDescriptionPair = $serviceResult->GetExpoItemTypesResult->IdDescriptionPair;
    }

    public function getIdDescriptionPair()
    {
        return $this->IdDescriptionPair;
    }
}
