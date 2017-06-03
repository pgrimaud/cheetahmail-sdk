<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class StatsResponse
{

    /**
     * @var UnitSMSStats $StatsResult
     */
    protected $StatsResult = null;

    /**
     * @param UnitSMSStats $StatsResult
     */
    public function __construct($StatsResult)
    {
        $this->StatsResult = $StatsResult;
    }

    /**
     * @return UnitSMSStats
     */
    public function getStatsResult()
    {
        return $this->StatsResult;
    }

    /**
     * @param UnitSMSStats $StatsResult
     * @return \Cheetahmail\Campaigns\SmsUnit\StatsResponse
     */
    public function setStatsResult($StatsResult)
    {
        $this->StatsResult = $StatsResult;
        return $this;
    }
}
