<?php
namespace Cheetahmail\Campaigns\BodyManager;

class UnTrackBodyResponse
{

    /**
     * @var string $UnTrackBodyResult
     */
    protected $UnTrackBodyResult = null;

    /**
     * @param string $UnTrackBodyResult
     */
    public function __construct($UnTrackBodyResult)
    {
        $this->UnTrackBodyResult = $UnTrackBodyResult;
    }

    /**
     * @return string
     */
    public function getUnTrackBodyResult()
    {
        return $this->UnTrackBodyResult;
    }

    /**
     * @param string $UnTrackBodyResult
     * @return \Cheetahmail\Campaigns\BodyManager\UnTrackBodyResponse
     */
    public function setUnTrackBodyResult($UnTrackBodyResult)
    {
        $this->UnTrackBodyResult = $UnTrackBodyResult;
        return $this;
    }
}
