<?php

namespace Cheetahmail\Campaigns\BodyManager;

class TrackBodyResponse
{

    /**
     * @var string $TrackBodyResult
     */
    protected $TrackBodyResult = null;

    /**
     * @param string $TrackBodyResult
     */
    public function __construct($TrackBodyResult)
    {
      $this->TrackBodyResult = $TrackBodyResult;
    }

    /**
     * @return string
     */
    public function getTrackBodyResult()
    {
      return $this->TrackBodyResult;
    }

    /**
     * @param string $TrackBodyResult
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyResponse
     */
    public function setTrackBodyResult($TrackBodyResult)
    {
      $this->TrackBodyResult = $TrackBodyResult;
      return $this;
    }

}
