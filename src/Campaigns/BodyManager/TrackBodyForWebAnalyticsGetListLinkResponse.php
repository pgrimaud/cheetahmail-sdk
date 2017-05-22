<?php

namespace Cheetahmail\Campaigns\BodyManager;

class TrackBodyForWebAnalyticsGetListLinkResponse
{

    /**
     * @var BodyLinkDetails $TrackBodyForWebAnalyticsGetListLinkResult
     */
    protected $TrackBodyForWebAnalyticsGetListLinkResult = null;

    /**
     * @param BodyLinkDetails $TrackBodyForWebAnalyticsGetListLinkResult
     */
    public function __construct($TrackBodyForWebAnalyticsGetListLinkResult)
    {
      $this->TrackBodyForWebAnalyticsGetListLinkResult = $TrackBodyForWebAnalyticsGetListLinkResult;
    }

    /**
     * @return BodyLinkDetails
     */
    public function getTrackBodyForWebAnalyticsGetListLinkResult()
    {
      return $this->TrackBodyForWebAnalyticsGetListLinkResult;
    }

    /**
     * @param BodyLinkDetails $TrackBodyForWebAnalyticsGetListLinkResult
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyForWebAnalyticsGetListLinkResponse
     */
    public function setTrackBodyForWebAnalyticsGetListLinkResult($TrackBodyForWebAnalyticsGetListLinkResult)
    {
      $this->TrackBodyForWebAnalyticsGetListLinkResult = $TrackBodyForWebAnalyticsGetListLinkResult;
      return $this;
    }

}
