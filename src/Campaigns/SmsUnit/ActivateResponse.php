<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class ActivateResponse
{

    /**
     * @var boolean $ActivateResult
     */
    protected $ActivateResult = null;

    /**
     * @param boolean $ActivateResult
     */
    public function __construct($ActivateResult)
    {
        $this->ActivateResult = $ActivateResult;
    }

    /**
     * @return boolean
     */
    public function getActivateResult()
    {
        return $this->ActivateResult;
    }

    /**
     * @param boolean $ActivateResult
     * @return \Cheetahmail\Campaigns\SmsUnit\ActivateResponse
     */
    public function setActivateResult($ActivateResult)
    {
        $this->ActivateResult = $ActivateResult;
        return $this;
    }
}
