<?php
namespace Cheetahmail\Data\Segment;

class UpdateResponse
{

    /**
     * @var boolean $UpdateResult
     */
    protected $UpdateResult = null;

    /**
     * @param boolean $UpdateResult
     */
    public function __construct($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateResult()
    {
        return $this->UpdateResult;
    }

    /**
     * @param boolean $UpdateResult
     * @return \Cheetahmail\Data\Segment\UpdateResponse
     */
    public function setUpdateResult($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
        return $this;
    }
}
