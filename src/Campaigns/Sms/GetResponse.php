<?php
namespace Cheetahmail\Campaigns\Sms;

class GetResponse
{

    /**
     * @var SmsWS $GetResult
     */
    protected $GetResult = null;

    /**
     * @param SmsWS $GetResult
     */
    public function __construct($GetResult)
    {
        $this->GetResult = $GetResult;
    }

    /**
     * @return SmsWS
     */
    public function getGetResult()
    {
        return $this->GetResult;
    }

    /**
     * @param SmsWS $GetResult
     * @return \Cheetahmail\Campaigns\Sms\GetResponse
     */
    public function setGetResult($GetResult)
    {
        $this->GetResult = $GetResult;
        return $this;
    }
}
