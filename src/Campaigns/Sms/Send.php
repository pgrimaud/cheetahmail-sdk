<?php
namespace Cheetahmail\Campaigns\Sms;

class Send
{

    /**
     * @var SendSmsCampaignParams $smsCampaignParams
     */
    protected $smsCampaignParams = null;

    /**
     * @param SendSmsCampaignParams $smsCampaignParams
     */
    public function __construct($smsCampaignParams)
    {
        $this->smsCampaignParams = $smsCampaignParams;
    }

    /**
     * @return SendSmsCampaignParams
     */
    public function getSmsCampaignParams()
    {
        return $this->smsCampaignParams;
    }

    /**
     * @param SendSmsCampaignParams $smsCampaignParams
     * @return \Cheetahmail\Campaigns\Sms\Send
     */
    public function setSmsCampaignParams($smsCampaignParams)
    {
        $this->smsCampaignParams = $smsCampaignParams;
        return $this;
    }
}
