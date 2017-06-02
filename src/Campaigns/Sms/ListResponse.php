<?php
namespace Cheetahmail\Campaigns\Sms;

class ListResponse
{

    /**
     * @var ArrayOfCampaign $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ArrayOfCampaign $ListResult
     */
    public function __construct($ListResult)
    {
        $this->ListResult = $ListResult;
    }

    /**
     * @return ArrayOfCampaign
     */
    public function getListResult()
    {
        return $this->ListResult;
    }

    /**
     * @param ArrayOfCampaign $ListResult
     * @return \Cheetahmail\Campaigns\Sms\ListResponse
     */
    public function setListResult($ListResult)
    {
        $this->ListResult = $ListResult;
        return $this;
    }
}
