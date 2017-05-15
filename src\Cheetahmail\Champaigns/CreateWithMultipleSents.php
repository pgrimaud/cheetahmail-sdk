<?php

namespace Cheetahmail\Campaigns;

class CreateWithMultipleSents
{

    /**
     * @var CampaignParams $campaignParams
     */
    protected $campaignParams = null;

    /**
     * @var ArrayOfSentParams $sentParams
     */
    protected $sentParams = null;

    /**
     * @var ArrayOfMessageParams $messageParams
     */
    protected $messageParams = null;

    /**
     * @param CampaignParams $campaignParams
     * @param ArrayOfSentParams $sentParams
     * @param ArrayOfMessageParams $messageParams
     */
    public function __construct($campaignParams, $sentParams, $messageParams)
    {
      $this->campaignParams = $campaignParams;
      $this->sentParams = $sentParams;
      $this->messageParams = $messageParams;
    }

    /**
     * @return CampaignParams
     */
    public function getCampaignParams()
    {
      return $this->campaignParams;
    }

    /**
     * @param CampaignParams $campaignParams
     * @return \Cheetahmail\Campaigns\CreateWithMultipleSents
     */
    public function setCampaignParams($campaignParams)
    {
      $this->campaignParams = $campaignParams;
      return $this;
    }

    /**
     * @return ArrayOfSentParams
     */
    public function getSentParams()
    {
      return $this->sentParams;
    }

    /**
     * @param ArrayOfSentParams $sentParams
     * @return \Cheetahmail\Campaigns\CreateWithMultipleSents
     */
    public function setSentParams($sentParams)
    {
      $this->sentParams = $sentParams;
      return $this;
    }

    /**
     * @return ArrayOfMessageParams
     */
    public function getMessageParams()
    {
      return $this->messageParams;
    }

    /**
     * @param ArrayOfMessageParams $messageParams
     * @return \Cheetahmail\Campaigns\CreateWithMultipleSents
     */
    public function setMessageParams($messageParams)
    {
      $this->messageParams = $messageParams;
      return $this;
    }

}
