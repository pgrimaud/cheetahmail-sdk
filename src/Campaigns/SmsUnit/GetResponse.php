<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class GetResponse
{

    /**
     * @var UnitSMSCampaign $GetResult
     */
    protected $GetResult = null;

    /**
     * @param UnitSMSCampaign $GetResult
     */
    public function __construct($GetResult)
    {
        $this->GetResult = $GetResult;
    }

    /**
     * @return UnitSMSCampaign
     */
    public function getGetResult()
    {
        return $this->GetResult;
    }

    /**
     * @param UnitSMSCampaign $GetResult
     * @return \Cheetahmail\Campaigns\SmsUnit\GetResponse
     */
    public function setGetResult($GetResult)
    {
        $this->GetResult = $GetResult;
        return $this;
    }
}
