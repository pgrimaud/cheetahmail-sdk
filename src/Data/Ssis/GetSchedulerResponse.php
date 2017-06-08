<?php
namespace Cheetahmail\Data\Ssis;

class GetSchedulerResponse
{

    /**
     * @var SchedulerDesc $GetSchedulerResult
     */
    protected $GetSchedulerResult = null;

    /**
     * @param SchedulerDesc $GetSchedulerResult
     */
    public function __construct($GetSchedulerResult)
    {
        $this->GetSchedulerResult = $GetSchedulerResult;
    }

    /**
     * @return SchedulerDesc
     */
    public function getGetSchedulerResult()
    {
        return $this->GetSchedulerResult;
    }

    /**
     * @param SchedulerDesc $GetSchedulerResult
     * @return \Cheetahmail\Data\Ssis\GetSchedulerResponse
     */
    public function setGetSchedulerResult($GetSchedulerResult)
    {
        $this->GetSchedulerResult = $GetSchedulerResult;
        return $this;
    }
}
