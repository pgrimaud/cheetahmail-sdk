<?php
namespace Cheetahmail\Data\Ssis;

class UpdateschedulerResponse
{

    /**
     * @var boolean $UpdateschedulerResult
     */
    protected $UpdateschedulerResult = null;

    /**
     * @param boolean $UpdateschedulerResult
     */
    public function __construct($UpdateschedulerResult)
    {
        $this->UpdateschedulerResult = $UpdateschedulerResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateschedulerResult()
    {
        return $this->UpdateschedulerResult;
    }

    /**
     * @param boolean $UpdateschedulerResult
     * @return \Cheetahmail\Data\Ssis\UpdateschedulerResponse
     */
    public function setUpdateschedulerResult($UpdateschedulerResult)
    {
        $this->UpdateschedulerResult = $UpdateschedulerResult;
        return $this;
    }
}
