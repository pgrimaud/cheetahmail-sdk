<?php
namespace Cheetahmail\Statistics\Stats;

class GetResponse
{

    /**
     * @var CampaignStats $GetResult
     */
    protected $GetResult = null;

    /**
     * @param CampaignStats $GetResult
     */
    public function __construct($GetResult)
    {
        $this->GetResult = $GetResult;
    }

    /**
     * @return CampaignStats
     */
    public function getGetResult()
    {
        return $this->GetResult;
    }

    /**
     * @param CampaignStats $GetResult
     * @return \Cheetahmail\Statistics\Stats\GetResponse
     */
    public function setGetResult($GetResult)
    {
        $this->GetResult = $GetResult;
        return $this;
    }
}
