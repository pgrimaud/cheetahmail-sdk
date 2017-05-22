<?php

namespace Cheetahmail\Campaigns\BodyManager;

class CreateCategoryResponse
{

    /**
     * @var CataDetails $CreateCategoryResult
     */
    protected $CreateCategoryResult = null;

    /**
     * @param CataDetails $CreateCategoryResult
     */
    public function __construct($CreateCategoryResult)
    {
      $this->CreateCategoryResult = $CreateCategoryResult;
    }

    /**
     * @return CataDetails
     */
    public function getCreateCategoryResult()
    {
      return $this->CreateCategoryResult;
    }

    /**
     * @param CataDetails $CreateCategoryResult
     * @return \Cheetahmail\Campaigns\BodyManager\CreateCategoryResponse
     */
    public function setCreateCategoryResult($CreateCategoryResult)
    {
      $this->CreateCategoryResult = $CreateCategoryResult;
      return $this;
    }

}
