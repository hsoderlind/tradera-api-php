<?php

namespace Hsoderlind\Tradera\Api\Helper;

class ShopItemImage
{
    /**
     * Image type (jpeg, gif, png)
     *
     * @var string
     */
    public $Format;

    /**
     * Image data
     *
     * @var string
     */
    public $Data;

    /**
     * Image name
     *
     * @var string
     */
    public $Name;

    /**
     * If the image should have a Mega-image (extra large)
     *
     * @var boolean
     */
    public $HasMega;
}
