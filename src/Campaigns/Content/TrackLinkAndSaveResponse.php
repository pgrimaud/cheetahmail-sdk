<?php
namespace Cheetahmail\Campaigns\Content;

class TrackLinkAndSaveResponse
{

    /**
     * @var int $TrackLinkAndSaveResult
     */
    protected $TrackLinkAndSaveResult = null;

    /**
     * @param int $TrackLinkAndSaveResult
     */
    public function __construct($TrackLinkAndSaveResult)
    {
        $this->TrackLinkAndSaveResult = $TrackLinkAndSaveResult;
    }

    /**
     * @return int
     */
    public function getTrackLinkAndSaveResult()
    {
        return $this->TrackLinkAndSaveResult;
    }

    /**
     * @param int $TrackLinkAndSaveResult
     * @return \Cheetahmail\Campaigns\Content\TrackLinkAndSaveResponse
     */
    public function setTrackLinkAndSaveResult($TrackLinkAndSaveResult)
    {
        $this->TrackLinkAndSaveResult = $TrackLinkAndSaveResult;
        return $this;
    }
}
