<?php
namespace Cheetahmail\Campaigns;

class SuspendResponse
{

    /**
     * @var boolean $SuspendResult
     */
    protected $SuspendResult = null;

    /**
     * @param boolean $SuspendResult
     */
    public function __construct($SuspendResult)
    {
        $this->SuspendResult = $SuspendResult;
    }

    /**
     * @return boolean
     */
    public function getSuspendResult()
    {
        return $this->SuspendResult;
    }

    /**
     * @param boolean $SuspendResult
     * @return \Cheetahmail\Campaigns\SuspendResponse
     */
    public function setSuspendResult($SuspendResult)
    {
        $this->SuspendResult = $SuspendResult;
        return $this;
    }
}
