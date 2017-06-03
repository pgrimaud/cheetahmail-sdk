<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class DeactivateResponse
{

    /**
     * @var boolean $DeactivateResult
     */
    protected $DeactivateResult = null;

    /**
     * @param boolean $DeactivateResult
     */
    public function __construct($DeactivateResult)
    {
        $this->DeactivateResult = $DeactivateResult;
    }

    /**
     * @return boolean
     */
    public function getDeactivateResult()
    {
        return $this->DeactivateResult;
    }

    /**
     * @param boolean $DeactivateResult
     * @return \Cheetahmail\Campaigns\SmsUnit\DeactivateResponse
     */
    public function setDeactivateResult($DeactivateResult)
    {
        $this->DeactivateResult = $DeactivateResult;
        return $this;
    }
}
