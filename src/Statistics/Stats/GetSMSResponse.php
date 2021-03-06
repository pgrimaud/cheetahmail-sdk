<?php
namespace Cheetahmail\Statistics\Stats;

class GetSMSResponse
{

    /**
     * @var SMSCampaignStats $GetSMSResult
     */
    protected $GetSMSResult = null;

    /**
     * @param SMSCampaignStats $GetSMSResult
     */
    public function __construct($GetSMSResult)
    {
        $this->GetSMSResult = $GetSMSResult;
    }

    /**
     * @return SMSCampaignStats
     */
    public function getGetSMSResult()
    {
        return $this->GetSMSResult;
    }

    /**
     * @param SMSCampaignStats $GetSMSResult
     * @return \Cheetahmail\Statistics\Stats\GetSMSResponse
     */
    public function setGetSMSResult($GetSMSResult)
    {
        $this->GetSMSResult = $GetSMSResult;
        return $this;
    }
}
