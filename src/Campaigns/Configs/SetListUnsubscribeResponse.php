<?php
namespace Cheetahmail\Campaigns\Configs;

class SetListUnsubscribeResponse
{

    /**
     * @var boolean $SetListUnsubscribeResult
     */
    protected $SetListUnsubscribeResult = null;

    /**
     * @param boolean $SetListUnsubscribeResult
     */
    public function __construct($SetListUnsubscribeResult)
    {
        $this->SetListUnsubscribeResult = $SetListUnsubscribeResult;
    }

    /**
     * @return boolean
     */
    public function getSetListUnsubscribeResult()
    {
        return $this->SetListUnsubscribeResult;
    }

    /**
     * @param boolean $SetListUnsubscribeResult
     * @return \Cheetahmail\Campaigns\Configs\SetListUnsubscribeResponse
     */
    public function setSetListUnsubscribeResult($SetListUnsubscribeResult)
    {
        $this->SetListUnsubscribeResult = $SetListUnsubscribeResult;
        return $this;
    }
}
