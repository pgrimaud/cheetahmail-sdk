<?php
namespace Cheetahmail\Data\Segment;

class DeleteSegmentResponse
{

    /**
     * @var boolean $DeleteSegmentResult
     */
    protected $DeleteSegmentResult = null;

    /**
     * @param boolean $DeleteSegmentResult
     */
    public function __construct($DeleteSegmentResult)
    {
        $this->DeleteSegmentResult = $DeleteSegmentResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteSegmentResult()
    {
        return $this->DeleteSegmentResult;
    }

    /**
     * @param boolean $DeleteSegmentResult
     * @return \Cheetahmail\Data\Segment\DeleteSegmentResponse
     */
    public function setDeleteSegmentResult($DeleteSegmentResult)
    {
        $this->DeleteSegmentResult = $DeleteSegmentResult;
        return $this;
    }
}
