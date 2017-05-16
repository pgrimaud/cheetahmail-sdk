<?php
namespace Cheetahmail\Campaigns;

class UpdateMessage
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var MessageParams $parameters
     */
    protected $parameters = null;

    /**
     * @param int $campaignId
     * @param MessageParams $parameters
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
     * @return \Cheetahmail\Campaigns\UpdateMessage
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return MessageParams
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param MessageParams $parameters
     * @return \Cheetahmail\Campaigns\UpdateMessage
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

}
