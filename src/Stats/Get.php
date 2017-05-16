<?php
namespace Cheetahmail\Stats;

class Get
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @param int $CampaignId
     */
    public function __construct($CampaignId)
    {
        $this->CampaignId = $CampaignId;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \Cheetahmail\Stats\Get
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }
}
