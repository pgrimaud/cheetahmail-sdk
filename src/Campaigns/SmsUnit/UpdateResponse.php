<?php
namespace Cheetahmail\Campaigns\SmsUnit;

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
     * @return \Cheetahmail\Campaigns\SmsUnit\UpdateResponse
     */
    public function setUpdateResult($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
        return $this;
    }
}
