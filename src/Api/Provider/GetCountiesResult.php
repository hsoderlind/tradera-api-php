<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetCountiesResult
{
    /**
     * An aray of objects representing the ID, description and value of each county.
     *
     * @var array
     */
    protected $IdDescriptionPair = [];

    public function __construct($serviceResult)
    {
        $this->IdDescriptionPair = $serviceResult->GetCountiesResult->IdDescriptionPair;
    }

    public function getIdDescriptionPair()
    {
        return $this->IdDescriptionPair;
    }
}
