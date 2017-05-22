<?php
namespace Cheetahmail\Campaigns\Campaigns;

class Create
{

    /**
     * @var CampaignParams $campaignParams
     */
    protected $campaignParams = null;

    /**
     * @var SentParams $sentParams
     */
    protected $sentParams = null;

    /**
     * @var MessageParams $messageParams
     */
    protected $messageParams = null;

    /**
     * @param CampaignParams $campaignParams
     * @param SentParams $sentParams
     * @param MessageParams $messageParams
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
     * @return \Cheetahmail\Campaigns\Campaigns\Create
     */
    public function setCampaignParams($campaignParams)
    {
        $this->campaignParams = $campaignParams;
        return $this;
    }

    /**
     * @return SentParams
     */
    public function getSentParams()
    {
        return $this->sentParams;
    }

    /**
     * @param SentParams $sentParams
     * @return \Cheetahmail\Campaigns\Campaigns\Create
     */
    public function setSentParams($sentParams)
    {
        $this->sentParams = $sentParams;
        return $this;
    }

    /**
     * @return MessageParams
     */
    public function getMessageParams()
    {
        return $this->messageParams;
    }

    /**
     * @param MessageParams $messageParams
     * @return \Cheetahmail\Campaigns\Campaigns\Create
     */
    public function setMessageParams($messageParams)
    {
        $this->messageParams = $messageParams;
        return $this;
    }
}
