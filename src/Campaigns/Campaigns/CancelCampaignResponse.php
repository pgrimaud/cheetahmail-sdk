<?php
namespace Cheetahmail\Campaigns\Campaigns;

class CancelCampaignResponse
{

    /**
     * @var boolean $CancelCampaignResult
     */
    protected $CancelCampaignResult = null;

    /**
     * @param boolean $CancelCampaignResult
     */
    public function __construct($CancelCampaignResult)
    {
        $this->CancelCampaignResult = $CancelCampaignResult;
    }

    /**
     * @return boolean
     */
    public function getCancelCampaignResult()
    {
        return $this->CancelCampaignResult;
    }

    /**
     * @param boolean $CancelCampaignResult
     * @return \Cheetahmail\Campaigns\Campaigns\CancelCampaignResponse
     */
    public function setCancelCampaignResult($CancelCampaignResult)
    {
        $this->CancelCampaignResult = $CancelCampaignResult;
        return $this;
    }
}
