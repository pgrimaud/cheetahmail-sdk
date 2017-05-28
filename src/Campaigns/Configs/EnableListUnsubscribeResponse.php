<?php
namespace Cheetahmail\Campaigns\Configs;

class EnableListUnsubscribeResponse
{

    /**
     * @var boolean $EnableListUnsubscribeResult
     */
    protected $EnableListUnsubscribeResult = null;

    /**
     * @param boolean $EnableListUnsubscribeResult
     */
    public function __construct($EnableListUnsubscribeResult)
    {
        $this->EnableListUnsubscribeResult = $EnableListUnsubscribeResult;
    }

    /**
     * @return boolean
     */
    public function getEnableListUnsubscribeResult()
    {
        return $this->EnableListUnsubscribeResult;
    }

    /**
     * @param boolean $EnableListUnsubscribeResult
     * @return \Cheetahmail\Campaigns\Configs\EnableListUnsubscribeResponse
     */
    public function setEnableListUnsubscribeResult($EnableListUnsubscribeResult)
    {
        $this->EnableListUnsubscribeResult = $EnableListUnsubscribeResult;
        return $this;
    }
}
