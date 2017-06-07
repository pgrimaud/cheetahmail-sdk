<?php
namespace Cheetahmail\Data\Segment;

class GetImportStatus
{

    /**
     * @var int $segmentId
     */
    protected $segmentId = null;

    /**
     * @param int $segmentId
     */
    public function __construct($segmentId)
    {
        $this->segmentId = $segmentId;
    }

    /**
     * @return int
     */
    public function getSegmentId()
    {
        return $this->segmentId;
    }

    /**
     * @param int $segmentId
     * @return \Cheetahmail\Data\Segment\GetImportStatus
     */
    public function setSegmentId($segmentId)
    {
        $this->segmentId = $segmentId;
        return $this;
    }
}
