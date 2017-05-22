<?php
namespace Cheetahmail\Statistics\Stats;

class ListResponse
{

    /**
     * @var ArrayOfCampaignOverview $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ArrayOfCampaignOverview $ListResult
     */
    public function __construct($ListResult)
    {
        $this->ListResult = $ListResult;
    }

    /**
     * @return ArrayOfCampaignOverview
     */
    public function getListResult()
    {
        return $this->ListResult;
    }

    /**
     * @param ArrayOfCampaignOverview $ListResult
     * @return \Cheetahmail\Statistics\Stats\ListResponse
     */
    public function setListResult($ListResult)
    {
        $this->ListResult = $ListResult;
        return $this;
    }
}
