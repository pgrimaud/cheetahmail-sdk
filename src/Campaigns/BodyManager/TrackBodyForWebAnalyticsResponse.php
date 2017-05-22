<?php
namespace Cheetahmail\Campaigns\BodyManager;

class TrackBodyForWebAnalyticsResponse
{

    /**
     * @var string $TrackBodyForWebAnalyticsResult
     */
    protected $TrackBodyForWebAnalyticsResult = null;

    /**
     * @param string $TrackBodyForWebAnalyticsResult
     */
    public function __construct($TrackBodyForWebAnalyticsResult)
    {
        $this->TrackBodyForWebAnalyticsResult = $TrackBodyForWebAnalyticsResult;
    }

    /**
     * @return string
     */
    public function getTrackBodyForWebAnalyticsResult()
    {
        return $this->TrackBodyForWebAnalyticsResult;
    }

    /**
     * @param string $TrackBodyForWebAnalyticsResult
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyForWebAnalyticsResponse
     */
    public function setTrackBodyForWebAnalyticsResult($TrackBodyForWebAnalyticsResult)
    {
        $this->TrackBodyForWebAnalyticsResult = $TrackBodyForWebAnalyticsResult;
        return $this;
    }
}
