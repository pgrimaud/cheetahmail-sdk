<?php
namespace Cheetahmail\Data\Ssis;

class CreateSchedulerResponse
{

    /**
     * @var boolean $CreateSchedulerResult
     */
    protected $CreateSchedulerResult = null;

    /**
     * @param boolean $CreateSchedulerResult
     */
    public function __construct($CreateSchedulerResult)
    {
        $this->CreateSchedulerResult = $CreateSchedulerResult;
    }

    /**
     * @return boolean
     */
    public function getCreateSchedulerResult()
    {
        return $this->CreateSchedulerResult;
    }

    /**
     * @param boolean $CreateSchedulerResult
     * @return \Cheetahmail\Data\Ssis\CreateSchedulerResponse
     */
    public function setCreateSchedulerResult($CreateSchedulerResult)
    {
        $this->CreateSchedulerResult = $CreateSchedulerResult;
        return $this;
    }
}
