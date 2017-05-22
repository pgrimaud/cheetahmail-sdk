<?php
namespace Cheetahmail\Campaigns\Campaigns;

class ListResponse
{

    /**
     * @var ArrayOfCampaignsListDetails $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ArrayOfCampaignsListDetails $ListResult
     */
    public function __construct($ListResult)
    {
        $this->ListResult = $ListResult;
    }

    /**
     * @return ArrayOfCampaignsListDetails
     */
    public function getListResult()
    {
        return $this->ListResult;
    }

    /**
     * @param ArrayOfCampaignsListDetails $ListResult
     * @return \Cheetahmail\Campaigns\Campaigns\ListResponse
     */
    public function setListResult($ListResult)
    {
        $this->ListResult = $ListResult;
        return $this;
    }
}
