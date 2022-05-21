<?php

namespace Hsoderlind\Tradera\Api\Action;

use Hsoderlind\Tradera\Api\Service\TraderaRestrictedService;
use stdClass;

class AddItemImage
{
    /**
     * The request Id of an Item request, created with a call to AddItem
     *
     * @var int
     */
    public $requestId;

    /**
     * The image data, including file headers and so on. Max accepted size: 4MB
     *
     * @var string
     */
    public $imageData;

    /**
     * The type/format of image being uploaded
     *
     * @var string
     */
    public $imageFormat;

    /**
     * If the image should have a Mega-image (extra large)
     *
     * @var boolean
     */
    public $hasMega;

    /**
     * Read the file from $filename and set $imageData to the data.
     *
     * @param string $filename
     * @return AddItemImage
     */
    public function addImage(string $filename): AddItemImage
    {
        $this->imageData = file_get_contents($filename);

        return $this;
    }

    /**
     * Dispatch this action.
     *
     * @param TraderaRestrictedService $client
     * @return void
     */
    public function dispatch(TraderaRestrictedService $client)
    {
        $addItemImageParams = new stdClass();
        foreach ($this as $prop => $value) {
            $addItemImageParams->$prop = $value;
        }

        $client->AddItemImage($addItemImageParams);
    }
}
