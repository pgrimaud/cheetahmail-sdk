<?php
namespace Cheetahmail\Campaigns\BodyManager;

class GetListCategoryResponse
{

    /**
     * @var ArrayOfCataDetails $GetListCategoryResult
     */
    protected $GetListCategoryResult = null;

    /**
     * @param ArrayOfCataDetails $GetListCategoryResult
     */
    public function __construct($GetListCategoryResult)
    {
        $this->GetListCategoryResult = $GetListCategoryResult;
    }

    /**
     * @return ArrayOfCataDetails
     */
    public function getGetListCategoryResult()
    {
        return $this->GetListCategoryResult;
    }

    /**
     * @param ArrayOfCataDetails $GetListCategoryResult
     * @return \Cheetahmail\Campaigns\BodyManager\GetListCategoryResponse
     */
    public function setGetListCategoryResult($GetListCategoryResult)
    {
        $this->GetListCategoryResult = $GetListCategoryResult;
        return $this;
    }
}
