<?php

namespace Cheetahmail\Campaigns\BodyManager;

class GetListWebAnalyticsResponse
{

    /**
     * @var ArrayOfWebAnalyticDetails $GetListWebAnalyticsResult
     */
    protected $GetListWebAnalyticsResult = null;

    /**
     * @param ArrayOfWebAnalyticDetails $GetListWebAnalyticsResult
     */
    public function __construct($GetListWebAnalyticsResult)
    {
      $this->GetListWebAnalyticsResult = $GetListWebAnalyticsResult;
    }

    /**
     * @return ArrayOfWebAnalyticDetails
     */
    public function getGetListWebAnalyticsResult()
    {
      return $this->GetListWebAnalyticsResult;
    }

    /**
     * @param ArrayOfWebAnalyticDetails $GetListWebAnalyticsResult
     * @return \Cheetahmail\Campaigns\BodyManager\GetListWebAnalyticsResponse
     */
    public function setGetListWebAnalyticsResult($GetListWebAnalyticsResult)
    {
      $this->GetListWebAnalyticsResult = $GetListWebAnalyticsResult;
      return $this;
    }

}
