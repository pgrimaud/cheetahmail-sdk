<?php
namespace Cheetahmail\Campaigns\Sms;

class Create
{

    /**
     * @var CreateSMSCampaignParams $smsCampaignParams
     */
    protected $smsCampaignParams = null;

    /**
     * @param CreateSMSCampaignParams $smsCampaignParams
     */
    public function __construct($smsCampaignParams)
    {
        $this->smsCampaignParams = $smsCampaignParams;
    }

    /**
     * @return CreateSMSCampaignParams
     */
    public function getSmsCampaignParams()
    {
        return $this->smsCampaignParams;
    }

    /**
     * @param CreateSMSCampaignParams $smsCampaignParams
     * @return \Cheetahmail\Campaigns\Sms\Create
     */
    public function setSmsCampaignParams($smsCampaignParams)
    {
        $this->smsCampaignParams = $smsCampaignParams;
        return $this;
    }
}
