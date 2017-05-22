<?php
namespace Cheetahmail\Campaigns\Campaigns;

class UpdateSentParams
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var SentParams $parameters
     */
    protected $parameters = null;

    /**
     * @param int $campaignId
     * @param SentParams $parameters
     */
    public function __construct($campaignId, $parameters)
    {
        $this->campaignId = $campaignId;
        $this->parameters = $parameters;
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
     * @return \Cheetahmail\Campaigns\Campaigns\UpdateSentParams
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return SentParams
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param SentParams $parameters
     * @return \Cheetahmail\Campaigns\Campaigns\UpdateSentParams
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }
}
