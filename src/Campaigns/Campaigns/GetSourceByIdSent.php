<?php
namespace Cheetahmail\Campaigns\Campaigns;

class GetSourceByIdSent
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var int $sentId
     */
    protected $sentId = null;

    /**
     * @param int $campaignId
     * @param int $sentId
     */
    public function __construct($campaignId, $sentId)
    {
        $this->campaignId = $campaignId;
        $this->sentId = $sentId;
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
     * @return \Cheetahmail\Campaigns\Campaigns\GetSourceByIdSent
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSentId()
    {
        return $this->sentId;
    }

    /**
     * @param int $sentId
     * @return \Cheetahmail\Campaigns\Campaigns\GetSourceByIdSent
     */
    public function setSentId($sentId)
    {
        $this->sentId = $sentId;
        return $this;
    }
}
