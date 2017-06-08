<?php
namespace Cheetahmail\Data\Ssis;

class ListSchedulersResponse
{

    /**
     * @var ArrayOfSchedulerDesc $ListSchedulersResult
     */
    protected $ListSchedulersResult = null;

    /**
     * @param ArrayOfSchedulerDesc $ListSchedulersResult
     */
    public function __construct($ListSchedulersResult)
    {
        $this->ListSchedulersResult = $ListSchedulersResult;
    }

    /**
     * @return ArrayOfSchedulerDesc
     */
    public function getListSchedulersResult()
    {
        return $this->ListSchedulersResult;
    }

    /**
     * @param ArrayOfSchedulerDesc $ListSchedulersResult
     * @return \Cheetahmail\Data\Ssis\ListSchedulersResponse
     */
    public function setListSchedulersResult($ListSchedulersResult)
    {
        $this->ListSchedulersResult = $ListSchedulersResult;
        return $this;
    }
}
