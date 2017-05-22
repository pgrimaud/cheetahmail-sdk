<?php
namespace Cheetahmail\Campaigns\BodyManager;

class UnTrackLinkResponse
{

    /**
     * @var RelayDetails $UnTrackLinkResult
     */
    protected $UnTrackLinkResult = null;

    /**
     * @param RelayDetails $UnTrackLinkResult
     */
    public function __construct($UnTrackLinkResult)
    {
        $this->UnTrackLinkResult = $UnTrackLinkResult;
    }

    /**
     * @return RelayDetails
     */
    public function getUnTrackLinkResult()
    {
        return $this->UnTrackLinkResult;
    }

    /**
     * @param RelayDetails $UnTrackLinkResult
     * @return \Cheetahmail\Campaigns\BodyManager\UnTrackLinkResponse
     */
    public function setUnTrackLinkResult($UnTrackLinkResult)
    {
        $this->UnTrackLinkResult = $UnTrackLinkResult;
        return $this;
    }
}
