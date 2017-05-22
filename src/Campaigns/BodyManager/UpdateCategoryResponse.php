<?php
namespace Cheetahmail\Campaigns\BodyManager;

class UpdateCategoryResponse
{

    /**
     * @var boolean $UpdateCategoryResult
     */
    protected $UpdateCategoryResult = null;

    /**
     * @param boolean $UpdateCategoryResult
     */
    public function __construct($UpdateCategoryResult)
    {
        $this->UpdateCategoryResult = $UpdateCategoryResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateCategoryResult()
    {
        return $this->UpdateCategoryResult;
    }

    /**
     * @param boolean $UpdateCategoryResult
     * @return \Cheetahmail\Campaigns\BodyManager\UpdateCategoryResponse
     */
    public function setUpdateCategoryResult($UpdateCategoryResult)
    {
        $this->UpdateCategoryResult = $UpdateCategoryResult;
        return $this;
    }
}
