<?php
namespace Cheetahmail\Campaigns;

class UpdateCampaign
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var CampaignParams $parameters
     */
    protected $parameters = null;

    /**
     * @param int $campaignId
     * @param CampaignParams $parameters
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
     * @return \Cheetahmail\Campaigns\UpdateCampaign
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return CampaignParams
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param CampaignParams $parameters
     * @return \Cheetahmail\Campaigns\UpdateCampaign
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

}
