<?php
namespace Cheetahmail\Campaigns\Campaigns;

class DuplicateCampaignResponse
{

    /**
     * @var int $DuplicateCampaignResult
     */
    protected $DuplicateCampaignResult = null;

    /**
     * @param int $DuplicateCampaignResult
     */
    public function __construct($DuplicateCampaignResult)
    {
        $this->DuplicateCampaignResult = $DuplicateCampaignResult;
    }

    /**
     * @return int
     */
    public function getDuplicateCampaignResult()
    {
        return $this->DuplicateCampaignResult;
    }

    /**
     * @param int $DuplicateCampaignResult
     * @return \Cheetahmail\Campaigns\Campaigns\DuplicateCampaignResponse
     */
    public function setDuplicateCampaignResult($DuplicateCampaignResult)
    {
        $this->DuplicateCampaignResult = $DuplicateCampaignResult;
        return $this;
    }
}
