<?php
namespace Cheetahmail\Campaigns;

class GetCurrentMailCountResponse
{

    /**
     * @var int $GetCurrentMailCountResult
     */
    protected $GetCurrentMailCountResult = null;

    /**
     * @param int $GetCurrentMailCountResult
     */
    public function __construct($GetCurrentMailCountResult)
    {
        $this->GetCurrentMailCountResult = $GetCurrentMailCountResult;
    }

    /**
     * @return int
     */
    public function getGetCurrentMailCountResult()
    {
        return $this->GetCurrentMailCountResult;
    }

    /**
     * @param int $GetCurrentMailCountResult
     * @return \Cheetahmail\Campaigns\GetCurrentMailCountResponse
     */
    public function setGetCurrentMailCountResult($GetCurrentMailCountResult)
    {
        $this->GetCurrentMailCountResult = $GetCurrentMailCountResult;
        return $this;
    }
}
