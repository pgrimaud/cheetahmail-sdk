<?php

namespace Cheetahmail\Campaigns;

class CloseCampaignResponse
{

    /**
     * @var boolean $CloseCampaignResult
     */
    protected $CloseCampaignResult = null;

    /**
     * @param boolean $CloseCampaignResult
     */
    public function __construct($CloseCampaignResult)
    {
      $this->CloseCampaignResult = $CloseCampaignResult;
    }

    /**
     * @return boolean
     */
    public function getCloseCampaignResult()
    {
      return $this->CloseCampaignResult;
    }

    /**
     * @param boolean $CloseCampaignResult
     * @return \Cheetahmail\Campaigns\CloseCampaignResponse
     */
    public function setCloseCampaignResult($CloseCampaignResult)
    {
      $this->CloseCampaignResult = $CloseCampaignResult;
      return $this;
    }

}
