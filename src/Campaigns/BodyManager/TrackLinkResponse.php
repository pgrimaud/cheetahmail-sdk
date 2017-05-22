<?php
namespace Cheetahmail\Campaigns\BodyManager;

class TrackLinkResponse
{

    /**
     * @var int $TrackLinkResult
     */
    protected $TrackLinkResult = null;

    /**
     * @param int $TrackLinkResult
     */
    public function __construct($TrackLinkResult)
    {
        $this->TrackLinkResult = $TrackLinkResult;
    }

    /**
     * @return int
     */
    public function getTrackLinkResult()
    {
        return $this->TrackLinkResult;
    }

    /**
     * @param int $TrackLinkResult
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLinkResponse
     */
    public function setTrackLinkResult($TrackLinkResult)
    {
        $this->TrackLinkResult = $TrackLinkResult;
        return $this;
    }
}
