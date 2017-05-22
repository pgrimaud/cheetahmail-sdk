<?php
namespace Cheetahmail\Campaigns\Campaigns;

class ReprogramSentResponse
{

    /**
     * @var boolean $ReprogramSentResult
     */
    protected $ReprogramSentResult = null;

    /**
     * @param boolean $ReprogramSentResult
     */
    public function __construct($ReprogramSentResult)
    {
        $this->ReprogramSentResult = $ReprogramSentResult;
    }

    /**
     * @return boolean
     */
    public function getReprogramSentResult()
    {
        return $this->ReprogramSentResult;
    }

    /**
     * @param boolean $ReprogramSentResult
     * @return \Cheetahmail\Campaigns\Campaigns\ReprogramSentResponse
     */
    public function setReprogramSentResult($ReprogramSentResult)
    {
        $this->ReprogramSentResult = $ReprogramSentResult;
        return $this;
    }
}
