<?php
namespace Cheetahmail\Campaigns\BodyManager;

class TrackBodyGetListLinkResponse
{

    /**
     * @var BodyLinkDetails $TrackBodyGetListLinkResult
     */
    protected $TrackBodyGetListLinkResult = null;

    /**
     * @param BodyLinkDetails $TrackBodyGetListLinkResult
     */
    public function __construct($TrackBodyGetListLinkResult)
    {
        $this->TrackBodyGetListLinkResult = $TrackBodyGetListLinkResult;
    }

    /**
     * @return BodyLinkDetails
     */
    public function getTrackBodyGetListLinkResult()
    {
        return $this->TrackBodyGetListLinkResult;
    }

    /**
     * @param BodyLinkDetails $TrackBodyGetListLinkResult
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyGetListLinkResponse
     */
    public function setTrackBodyGetListLinkResult($TrackBodyGetListLinkResult)
    {
        $this->TrackBodyGetListLinkResult = $TrackBodyGetListLinkResult;
        return $this;
    }
}
