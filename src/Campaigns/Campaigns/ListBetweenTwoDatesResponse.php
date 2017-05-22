<?php
namespace Cheetahmail\Campaigns\Campaigns;

class ListBetweenTwoDatesResponse
{

    /**
     * @var ArrayOfCampaignsListDetails $ListBetweenTwoDatesResult
     */
    protected $ListBetweenTwoDatesResult = null;

    /**
     * @param ArrayOfCampaignsListDetails $ListBetweenTwoDatesResult
     */
    public function __construct($ListBetweenTwoDatesResult)
    {
        $this->ListBetweenTwoDatesResult = $ListBetweenTwoDatesResult;
    }

    /**
     * @return ArrayOfCampaignsListDetails
     */
    public function getListBetweenTwoDatesResult()
    {
        return $this->ListBetweenTwoDatesResult;
    }

    /**
     * @param ArrayOfCampaignsListDetails $ListBetweenTwoDatesResult
     * @return \Cheetahmail\Campaigns\Campaigns\ListBetweenTwoDatesResponse
     */
    public function setListBetweenTwoDatesResult($ListBetweenTwoDatesResult)
    {
        $this->ListBetweenTwoDatesResult = $ListBetweenTwoDatesResult;
        return $this;
    }
}
