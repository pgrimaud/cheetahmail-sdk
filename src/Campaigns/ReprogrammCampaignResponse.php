<?php
namespace Cheetahmail\Campaigns;

class ReprogrammCampaignResponse
{

    /**
     * @var boolean $ReprogrammCampaignResult
     */
    protected $ReprogrammCampaignResult = null;

    /**
     * @param boolean $ReprogrammCampaignResult
     */
    public function __construct($ReprogrammCampaignResult)
    {
        $this->ReprogrammCampaignResult = $ReprogrammCampaignResult;
    }

    /**
     * @return boolean
     */
    public function getReprogrammCampaignResult()
    {
        return $this->ReprogrammCampaignResult;
    }

    /**
     * @param boolean $ReprogrammCampaignResult
     * @return \Cheetahmail\Campaigns\ReprogrammCampaignResponse
     */
    public function setReprogrammCampaignResult($ReprogrammCampaignResult)
    {
        $this->ReprogrammCampaignResult = $ReprogrammCampaignResult;
        return $this;
    }
}
