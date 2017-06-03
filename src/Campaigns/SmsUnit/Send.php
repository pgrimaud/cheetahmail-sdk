<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class Send
{

    /**
     * @var SendUnitSMSParam $sendUnitSMSParam
     */
    protected $sendUnitSMSParam = null;

    /**
     * @param SendUnitSMSParam $sendUnitSMSParam
     */
    public function __construct($sendUnitSMSParam)
    {
        $this->sendUnitSMSParam = $sendUnitSMSParam;
    }

    /**
     * @return SendUnitSMSParam
     */
    public function getSendUnitSMSParam()
    {
        return $this->sendUnitSMSParam;
    }

    /**
     * @param SendUnitSMSParam $sendUnitSMSParam
     * @return \Cheetahmail\Campaigns\SmsUnit\Send
     */
    public function setSendUnitSMSParam($sendUnitSMSParam)
    {
        $this->sendUnitSMSParam = $sendUnitSMSParam;
        return $this;
    }
}
