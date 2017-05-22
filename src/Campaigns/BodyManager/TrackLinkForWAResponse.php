<?php

namespace Cheetahmail\Campaigns\BodyManager;

class TrackLinkForWAResponse
{

    /**
     * @var string $TrackLinkForWAResult
     */
    protected $TrackLinkForWAResult = null;

    /**
     * @param string $TrackLinkForWAResult
     */
    public function __construct($TrackLinkForWAResult)
    {
      $this->TrackLinkForWAResult = $TrackLinkForWAResult;
    }

    /**
     * @return string
     */
    public function getTrackLinkForWAResult()
    {
      return $this->TrackLinkForWAResult;
    }

    /**
     * @param string $TrackLinkForWAResult
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLinkForWAResponse
     */
    public function setTrackLinkForWAResult($TrackLinkForWAResult)
    {
      $this->TrackLinkForWAResult = $TrackLinkForWAResult;
      return $this;
    }

}
