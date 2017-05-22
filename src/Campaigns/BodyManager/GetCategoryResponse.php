<?php
namespace Cheetahmail\Campaigns\BodyManager;

class GetCategoryResponse
{

    /**
     * @var CataDetails $GetCategoryResult
     */
    protected $GetCategoryResult = null;

    /**
     * @param CataDetails $GetCategoryResult
     */
    public function __construct($GetCategoryResult)
    {
        $this->GetCategoryResult = $GetCategoryResult;
    }

    /**
     * @return CataDetails
     */
    public function getGetCategoryResult()
    {
        return $this->GetCategoryResult;
    }

    /**
     * @param CataDetails $GetCategoryResult
     * @return \Cheetahmail\Campaigns\BodyManager\GetCategoryResponse
     */
    public function setGetCategoryResult($GetCategoryResult)
    {
        $this->GetCategoryResult = $GetCategoryResult;
        return $this;
    }
}
