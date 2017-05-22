<?php
namespace Cheetahmail\Campaigns\BodyManager;

class UpdateCategoryOnLinkResponse
{

    /**
     * @var boolean $UpdateCategoryOnLinkResult
     */
    protected $UpdateCategoryOnLinkResult = null;

    /**
     * @param boolean $UpdateCategoryOnLinkResult
     */
    public function __construct($UpdateCategoryOnLinkResult)
    {
        $this->UpdateCategoryOnLinkResult = $UpdateCategoryOnLinkResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateCategoryOnLinkResult()
    {
        return $this->UpdateCategoryOnLinkResult;
    }

    /**
     * @param boolean $UpdateCategoryOnLinkResult
     * @return \Cheetahmail\Campaigns\BodyManager\UpdateCategoryOnLinkResponse
     */
    public function setUpdateCategoryOnLinkResult($UpdateCategoryOnLinkResult)
    {
        $this->UpdateCategoryOnLinkResult = $UpdateCategoryOnLinkResult;
        return $this;
    }
}
