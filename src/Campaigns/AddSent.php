<?php
namespace Cheetahmail\Campaigns;

class AddSent
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var SentParams $sentParams
     */
    protected $sentParams = null;

    /**
     * @var MessageParams $msgParams
     */
    protected $msgParams = null;

    /**
     * @param int $campaignId
     * @param SentParams $sentParams
     * @param MessageParams $msgParams
     */
    public function __construct($campaignId, $sentParams, $msgParams)
    {
        $this->campaignId = $campaignId;
        $this->sentParams = $sentParams;
        $this->msgParams = $msgParams;
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
     * @return \Cheetahmail\Campaigns\AddSent
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
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
     * @return \Cheetahmail\Campaigns\AddSent
     */
    public function setSentParams($sentParams)
    {
        $this->sentParams = $sentParams;
        return $this;
    }

    /**
     * @return MessageParams
     */
    public function getMsgParams()
    {
        return $this->msgParams;
    }

    /**
     * @param MessageParams $msgParams
     * @return \Cheetahmail\Campaigns\AddSent
     */
    public function setMsgParams($msgParams)
    {
        $this->msgParams = $msgParams;
        return $this;
    }
}
