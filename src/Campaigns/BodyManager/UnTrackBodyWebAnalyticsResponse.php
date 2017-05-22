<?php

namespace Cheetahmail\Campaigns\BodyManager;

class UnTrackBodyWebAnalyticsResponse
{

    /**
     * @var string $UnTrackBodyWebAnalyticsResult
     */
    protected $UnTrackBodyWebAnalyticsResult = null;

    /**
     * @param string $UnTrackBodyWebAnalyticsResult
     */
    public function __construct($UnTrackBodyWebAnalyticsResult)
    {
      $this->UnTrackBodyWebAnalyticsResult = $UnTrackBodyWebAnalyticsResult;
    }

    /**
     * @return string
     */
    public function getUnTrackBodyWebAnalyticsResult()
    {
      return $this->UnTrackBodyWebAnalyticsResult;
    }

    /**
     * @param string $UnTrackBodyWebAnalyticsResult
     * @return \Cheetahmail\Campaigns\BodyManager\UnTrackBodyWebAnalyticsResponse
     */
    public function setUnTrackBodyWebAnalyticsResult($UnTrackBodyWebAnalyticsResult)
    {
      $this->UnTrackBodyWebAnalyticsResult = $UnTrackBodyWebAnalyticsResult;
      return $this;
    }

}
