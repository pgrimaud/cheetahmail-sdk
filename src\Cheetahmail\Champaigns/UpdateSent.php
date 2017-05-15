<?php

namespace Cheetahmail\Campaigns;

class UpdateSent
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var int $idSent
     */
    protected $idSent = null;

    /**
     * @var SentParams $parameters
     */
    protected $parameters = null;

    /**
     * @param int $campaignId
     * @param int $idSent
     * @param SentParams $parameters
     */
    public function __construct($campaignId, $idSent, $parameters)
    {
      $this->campaignId = $campaignId;
      $this->idSent = $idSent;
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
     * @return \Cheetahmail\Campaigns\UpdateSent
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdSent()
    {
      return $this->idSent;
    }

    /**
     * @param int $idSent
     * @return \Cheetahmail\Campaigns\UpdateSent
     */
    public function setIdSent($idSent)
    {
      $this->idSent = $idSent;
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
     * @return \Cheetahmail\Campaigns\UpdateSent
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

}
