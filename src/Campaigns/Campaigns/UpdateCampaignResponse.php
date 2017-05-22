<?php
namespace Cheetahmail\Campaigns\Campaigns;

class UpdateCampaignResponse
{

    /**
     * @var boolean $UpdateCampaignResult
     */
    protected $UpdateCampaignResult = null;

    /**
     * @param boolean $UpdateCampaignResult
     */
    public function __construct($UpdateCampaignResult)
    {
        $this->UpdateCampaignResult = $UpdateCampaignResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateCampaignResult()
    {
        return $this->UpdateCampaignResult;
    }

    /**
     * @param boolean $UpdateCampaignResult
     * @return \Cheetahmail\Campaigns\Campaigns\UpdateCampaignResponse
     */
    public function setUpdateCampaignResult($UpdateCampaignResult)
    {
        $this->UpdateCampaignResult = $UpdateCampaignResult;
        return $this;
    }
}
