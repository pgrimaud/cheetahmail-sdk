<?php
namespace Cheetahmail\Data\Ssis;

class Updatescheduler
{

    /**
     * @var SchedulerDesc $scheduler
     */
    protected $scheduler = null;

    /**
     * @param SchedulerDesc $scheduler
     */
    public function __construct($scheduler)
    {
        $this->scheduler = $scheduler;
    }

    /**
     * @return SchedulerDesc
     */
    public function getScheduler()
    {
        return $this->scheduler;
    }

    /**
     * @param SchedulerDesc $scheduler
     * @return \Cheetahmail\Data\Ssis\Updatescheduler
     */
    public function setScheduler($scheduler)
    {
        $this->scheduler = $scheduler;
        return $this;
    }
}
