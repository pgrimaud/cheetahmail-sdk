<?php
namespace Cheetahmail\Campaigns\Sms;

class Update
{

    /**
     * @var UpdateSMSCampaignParams $smsCampaignParams
     */
    protected $smsCampaignParams = null;

    /**
     * @param UpdateSMSCampaignParams $smsCampaignParams
     */
    public function __construct($smsCampaignParams)
    {
        $this->smsCampaignParams = $smsCampaignParams;
    }

    /**
     * @return UpdateSMSCampaignParams
     */
    public function getSmsCampaignParams()
    {
        return $this->smsCampaignParams;
    }

    /**
     * @param UpdateSMSCampaignParams $smsCampaignParams
     * @return \Cheetahmail\Campaigns\Sms\Update
     */
    public function setSmsCampaignParams($smsCampaignParams)
    {
        $this->smsCampaignParams = $smsCampaignParams;
        return $this;
    }
}
