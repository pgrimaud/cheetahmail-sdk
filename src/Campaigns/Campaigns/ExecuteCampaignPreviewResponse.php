<?php
namespace Cheetahmail\Campaigns\Campaigns;

class ExecuteCampaignPreviewResponse
{

    /**
     * @var boolean $ExecuteCampaignPreviewResult
     */
    protected $ExecuteCampaignPreviewResult = null;

    /**
     * @param boolean $ExecuteCampaignPreviewResult
     */
    public function __construct($ExecuteCampaignPreviewResult)
    {
        $this->ExecuteCampaignPreviewResult = $ExecuteCampaignPreviewResult;
    }

    /**
     * @return boolean
     */
    public function getExecuteCampaignPreviewResult()
    {
        return $this->ExecuteCampaignPreviewResult;
    }

    /**
     * @param boolean $ExecuteCampaignPreviewResult
     * @return \Cheetahmail\Campaigns\Campaigns\ExecuteCampaignPreviewResponse
     */
    public function setExecuteCampaignPreviewResult($ExecuteCampaignPreviewResult)
    {
        $this->ExecuteCampaignPreviewResult = $ExecuteCampaignPreviewResult;
        return $this;
    }
}
