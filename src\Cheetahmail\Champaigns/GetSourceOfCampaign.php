<?php

namespace Cheetahmail\Campaigns;

class GetSourceOfCampaign
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @param int $campaignId
     */
    public function __construct($campaignId)
    {
      $this->campaignId = $campaignId;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Cheetahmail\Campaigns\GetSourceOfCampaign
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

}
