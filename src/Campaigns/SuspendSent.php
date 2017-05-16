<?php
namespace Cheetahmail\Campaigns;

class SuspendSent
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
     * @param int $campaignId
     * @param int $idSent
     */
    public function __construct($campaignId, $idSent)
    {
      $this->campaignId = $campaignId;
      $this->idSent = $idSent;
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
     * @return \Cheetahmail\Campaigns\SuspendSent
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
     * @return \Cheetahmail\Campaigns\SuspendSent
     */
    public function setIdSent($idSent)
    {
      $this->idSent = $idSent;
      return $this;
    }

}
