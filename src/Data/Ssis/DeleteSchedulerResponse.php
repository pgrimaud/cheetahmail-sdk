<?php
namespace Cheetahmail\Data\Ssis;

class DeleteSchedulerResponse
{

    /**
     * @var boolean $DeleteSchedulerResult
     */
    protected $DeleteSchedulerResult = null;

    /**
     * @param boolean $DeleteSchedulerResult
     */
    public function __construct($DeleteSchedulerResult)
    {
        $this->DeleteSchedulerResult = $DeleteSchedulerResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteSchedulerResult()
    {
        return $this->DeleteSchedulerResult;
    }

    /**
     * @param boolean $DeleteSchedulerResult
     * @return \Cheetahmail\Data\Ssis\DeleteSchedulerResponse
     */
    public function setDeleteSchedulerResult($DeleteSchedulerResult)
    {
        $this->DeleteSchedulerResult = $DeleteSchedulerResult;
        return $this;
    }
}
