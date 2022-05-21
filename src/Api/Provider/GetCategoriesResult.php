<?php

namespace Hsoderlind\Tradera\Api\Provider;

class GetCategoriesResult
{
    /**
     * The root category and all its child categories
     *
     * @var object
     */
    protected $category;

    public function __construct($serviceResult)
    {
        $this->category = $serviceResult->GetCategoriesResult->Category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
