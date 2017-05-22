<?php

namespace Cheetahmail\Campaigns\BodyManager;

class TrackListLinkResponse
{

    /**
     * @var ArrayOfRelayDetails $TrackListLinkResult
     */
    protected $TrackListLinkResult = null;

    /**
     * @param ArrayOfRelayDetails $TrackListLinkResult
     */
    public function __construct($TrackListLinkResult)
    {
      $this->TrackListLinkResult = $TrackListLinkResult;
    }

    /**
     * @return ArrayOfRelayDetails
     */
    public function getTrackListLinkResult()
    {
      return $this->TrackListLinkResult;
    }

    /**
     * @param ArrayOfRelayDetails $TrackListLinkResult
     * @return \Cheetahmail\Campaigns\BodyManager\TrackListLinkResponse
     */
    public function setTrackListLinkResult($TrackListLinkResult)
    {
      $this->TrackListLinkResult = $TrackListLinkResult;
      return $this;
    }

}
