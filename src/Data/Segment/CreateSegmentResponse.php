<?php
namespace Cheetahmail\Data\Segment;

class CreateSegmentResponse
{

    /**
     * @var int $CreateSegmentResult
     */
    protected $CreateSegmentResult = null;

    /**
     * @param int $CreateSegmentResult
     */
    public function __construct($CreateSegmentResult)
    {
        $this->CreateSegmentResult = $CreateSegmentResult;
    }

    /**
     * @return int
     */
    public function getCreateSegmentResult()
    {
        return $this->CreateSegmentResult;
    }

    /**
     * @param int $CreateSegmentResult
     * @return \Cheetahmail\Data\Segment\CreateSegmentResponse
     */
    public function setCreateSegmentResult($CreateSegmentResult)
    {
        $this->CreateSegmentResult = $CreateSegmentResult;
        return $this;
    }
}
