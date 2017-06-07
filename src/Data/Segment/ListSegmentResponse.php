<?php
namespace Cheetahmail\Data\Segment;

class ListSegmentResponse
{

    /**
     * @var ArrayOfString $ListSegmentResult
     */
    protected $ListSegmentResult = null;

    /**
     * @param ArrayOfString $ListSegmentResult
     */
    public function __construct($ListSegmentResult)
    {
        $this->ListSegmentResult = $ListSegmentResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getListSegmentResult()
    {
        return $this->ListSegmentResult;
    }

    /**
     * @param ArrayOfString $ListSegmentResult
     * @return \Cheetahmail\Data\Segment\ListSegmentResponse
     */
    public function setListSegmentResult($ListSegmentResult)
    {
        $this->ListSegmentResult = $ListSegmentResult;
        return $this;
    }
}
