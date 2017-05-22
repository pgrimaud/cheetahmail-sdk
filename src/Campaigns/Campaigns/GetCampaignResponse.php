<?php
namespace Cheetahmail\Campaigns\Campaigns;

class GetCampaignResponse
{

    /**
     * @var CampaignsDetails $GetCampaignResult
     */
    protected $GetCampaignResult = null;

    /**
     * @param CampaignsDetails $GetCampaignResult
     */
    public function __construct($GetCampaignResult)
    {
        $this->GetCampaignResult = $GetCampaignResult;
    }

    /**
     * @return CampaignsDetails
     */
    public function getGetCampaignResult()
    {
        return $this->GetCampaignResult;
    }

    /**
     * @param CampaignsDetails $GetCampaignResult
     * @return \Cheetahmail\Campaigns\Campaigns\GetCampaignResponse
     */
    public function setGetCampaignResult($GetCampaignResult)
    {
        $this->GetCampaignResult = $GetCampaignResult;
        return $this;
    }
}
