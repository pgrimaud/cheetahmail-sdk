<?php
namespace Cheetahmail\Campaigns;

class GetTotalMailCountResponse
{

    /**
     * @var int $GetTotalMailCountResult
     */
    protected $GetTotalMailCountResult = null;

    /**
     * @param int $GetTotalMailCountResult
     */
    public function __construct($GetTotalMailCountResult)
    {
      $this->GetTotalMailCountResult = $GetTotalMailCountResult;
    }

    /**
     * @return int
     */
    public function getGetTotalMailCountResult()
    {
      return $this->GetTotalMailCountResult;
    }

    /**
     * @param int $GetTotalMailCountResult
     * @return \Cheetahmail\Campaigns\GetTotalMailCountResponse
     */
    public function setGetTotalMailCountResult($GetTotalMailCountResult)
    {
      $this->GetTotalMailCountResult = $GetTotalMailCountResult;
      return $this;
    }

}
