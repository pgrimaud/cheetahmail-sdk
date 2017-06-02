<?php
namespace Cheetahmail\Campaigns\Sms;

class SendResponse
{

    /**
     * @var boolean $SendResult
     */
    protected $SendResult = null;

    /**
     * @param boolean $SendResult
     */
    public function __construct($SendResult)
    {
        $this->SendResult = $SendResult;
    }

    /**
     * @return boolean
     */
    public function getSendResult()
    {
        return $this->SendResult;
    }

    /**
     * @param boolean $SendResult
     * @return \Cheetahmail\Campaigns\Sms\SendResponse
     */
    public function setSendResult($SendResult)
    {
        $this->SendResult = $SendResult;
        return $this;
    }
}
