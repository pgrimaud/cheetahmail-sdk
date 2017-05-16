<?php

namespace Cheetahmail\Stats;

class GetSMS
{

    /**
     * @var int $SMSCampaignId
     */
    protected $SMSCampaignId = null;

    /**
     * @param int $SMSCampaignId
     */
    public function __construct($SMSCampaignId)
    {
      $this->SMSCampaignId = $SMSCampaignId;
    }

    /**
     * @return int
     */
    public function getSMSCampaignId()
    {
      return $this->SMSCampaignId;
    }

    /**
     * @param int $SMSCampaignId
     * @return \Cheetahmail\Stats\GetSMS
     */
    public function setSMSCampaignId($SMSCampaignId)
    {
      $this->SMSCampaignId = $SMSCampaignId;
      return $this;
    }

}
