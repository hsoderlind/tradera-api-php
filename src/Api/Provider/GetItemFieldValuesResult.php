<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetItemFieldValuesResult
{
    /**
     * Available VAT values.
     *
     * @var array
     */
    protected $VAT;

    /**
     * Available item attribute values like: New, Used.
     *
     * @var array
     */
    protected $ItemAttributes;

    /**
     * Available Payment types.
     *
     * @var array
     */
    protected $PaymentTypes;

    /**
     * Available Shipping types.
     *
     * @var array
     */
    protected $ShippingTypes;

    public function __construct($serviceResult)
    {
        $this->VAT = $serviceResult->GetItemFieldValuesResult->VAT;
        $this->ItemAttributes = $serviceResult->GetItemFieldValuesResult->ItemAttributes;
        $this->PaymentTypes = $serviceResult->GetItemFieldValuesResult->PaymentTypes;
        $this->ShippingTypes = $serviceResult->GetItemFieldValuesResult->ShippingTypes;
    }

    public function getVAT()
    {
        return $this->VAT;
    }

    public function getItemAttributes()
    {
        return $this->ItemAttributes;
    }

    public function getPaymentTypes()
    {
        return $this->PaymentTypes;
    }

    public function getShippingTypes()
    {
        return $this->ShippingTypes;
    }
}
