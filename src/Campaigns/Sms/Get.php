<?php
namespace Cheetahmail\Campaigns\Sms;

class Get
{

    /**
     * @var int $IDSMSCampaign
     */
    protected $IDSMSCampaign = null;

    /**
     * @param int $IDSMSCampaign
     */
    public function __construct($IDSMSCampaign)
    {
        $this->IDSMSCampaign = $IDSMSCampaign;
    }

    /**
     * @return int
     */
    public function getIDSMSCampaign()
    {
        return $this->IDSMSCampaign;
    }

    /**
     * @param int $IDSMSCampaign
     * @return \Cheetahmail\Campaigns\Sms\Get
     */
    public function setIDSMSCampaign($IDSMSCampaign)
    {
        $this->IDSMSCampaign = $IDSMSCampaign;
        return $this;
    }
}
