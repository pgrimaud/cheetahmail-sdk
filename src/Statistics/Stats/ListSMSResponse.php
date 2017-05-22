<?php
namespace Cheetahmail\Statistics\Stats;

class ListSMSResponse
{

    /**
     * @var ArrayOfSMSCampaignOverview $ListSMSResult
     */
    protected $ListSMSResult = null;

    /**
     * @param ArrayOfSMSCampaignOverview $ListSMSResult
     */
    public function __construct($ListSMSResult)
    {
        $this->ListSMSResult = $ListSMSResult;
    }

    /**
     * @return ArrayOfSMSCampaignOverview
     */
    public function getListSMSResult()
    {
        return $this->ListSMSResult;
    }

    /**
     * @param ArrayOfSMSCampaignOverview $ListSMSResult
     * @return \Cheetahmail\Statistics\Stats\ListSMSResponse
     */
    public function setListSMSResult($ListSMSResult)
    {
        $this->ListSMSResult = $ListSMSResult;
        return $this;
    }
}
