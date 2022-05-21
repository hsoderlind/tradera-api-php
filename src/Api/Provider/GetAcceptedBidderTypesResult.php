<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetAcceptedBidderTypesResult
{
    /**
     * An aray of objects representing the ID, description and value of each bidder type.
     *
     * @var array
     */
    protected $IdDescriptionPair = [];

    public function __construct($serviceResult)
    {
        $this->IdDescriptionPair = $serviceResult->GetAcceptedBidderTypesResult->IdDescriptionPair;
    }

    public function getIdDescriptionPair()
    {
        return $this->IdDescriptionPair;
    }
}
