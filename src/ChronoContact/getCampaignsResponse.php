<?php

namespace Cheetahmail\ChronoContact;

class getCampaignsResponse
{

    /**
     * @var ArrayOfArrayOfString $getCampaignsResult
     */
    protected $getCampaignsResult = null;

    /**
     * @param ArrayOfArrayOfString $getCampaignsResult
     */
    public function __construct($getCampaignsResult)
    {
        $this->getCampaignsResult = $getCampaignsResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetCampaignsResult()
    {
        return $this->getCampaignsResult;
    }

    /**
     * @param ArrayOfArrayOfString $getCampaignsResult
     * @return \Cheetahmail\ChronoContact\getCampaignsResponse
     */
    public function setGetCampaignsResult($getCampaignsResult)
    {
        $this->getCampaignsResult = $getCampaignsResult;
        return $this;
    }
}
