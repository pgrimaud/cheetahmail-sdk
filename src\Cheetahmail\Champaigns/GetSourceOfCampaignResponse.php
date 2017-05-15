<?php

namespace Cheetahmail\Campaigns;

class GetSourceOfCampaignResponse
{

    /**
     * @var ArrayOfSourceDetails $GetSourceOfCampaignResult
     */
    protected $GetSourceOfCampaignResult = null;

    /**
     * @param ArrayOfSourceDetails $GetSourceOfCampaignResult
     */
    public function __construct($GetSourceOfCampaignResult)
    {
      $this->GetSourceOfCampaignResult = $GetSourceOfCampaignResult;
    }

    /**
     * @return ArrayOfSourceDetails
     */
    public function getGetSourceOfCampaignResult()
    {
      return $this->GetSourceOfCampaignResult;
    }

    /**
     * @param ArrayOfSourceDetails $GetSourceOfCampaignResult
     * @return \Cheetahmail\Campaigns\GetSourceOfCampaignResponse
     */
    public function setGetSourceOfCampaignResult($GetSourceOfCampaignResult)
    {
      $this->GetSourceOfCampaignResult = $GetSourceOfCampaignResult;
      return $this;
    }

}
