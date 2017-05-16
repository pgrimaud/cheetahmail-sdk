<?php
namespace Cheetahmail\Campaigns;

class StartSentResponse
{

    /**
     * @var int $StartSentResult
     */
    protected $StartSentResult = null;

    /**
     * @param int $StartSentResult
     */
    public function __construct($StartSentResult)
    {
        $this->StartSentResult = $StartSentResult;
    }

    /**
     * @return int
     */
    public function getStartSentResult()
    {
        return $this->StartSentResult;
    }

    /**
     * @param int $StartSentResult
     * @return \Cheetahmail\Campaigns\StartSentResponse
     */
    public function setStartSentResult($StartSentResult)
    {
        $this->StartSentResult = $StartSentResult;
        return $this;
    }
}
