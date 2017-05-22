<?php
namespace Cheetahmail\Campaigns\Campaigns;

class FindCampaignsByDescriptionResponse
{

    /**
     * @var ArrayOfDetailsCamp $FindCampaignsByDescriptionResult
     */
    protected $FindCampaignsByDescriptionResult = null;

    /**
     * @param ArrayOfDetailsCamp $FindCampaignsByDescriptionResult
     */
    public function __construct($FindCampaignsByDescriptionResult)
    {
        $this->FindCampaignsByDescriptionResult = $FindCampaignsByDescriptionResult;
    }

    /**
     * @return ArrayOfDetailsCamp
     */
    public function getFindCampaignsByDescriptionResult()
    {
        return $this->FindCampaignsByDescriptionResult;
    }

    /**
     * @param ArrayOfDetailsCamp $FindCampaignsByDescriptionResult
     * @return \Cheetahmail\Campaigns\Campaigns\FindCampaignsByDescriptionResponse
     */
    public function setFindCampaignsByDescriptionResult($FindCampaignsByDescriptionResult)
    {
        $this->FindCampaignsByDescriptionResult = $FindCampaignsByDescriptionResult;
        return $this;
    }
}
