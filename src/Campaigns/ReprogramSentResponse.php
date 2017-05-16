<?php
namespace Cheetahmail\Campaigns;

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
     * @return \Cheetahmail\Campaigns\ReprogramSentResponse
     */
    public function setReprogramSentResult($ReprogramSentResult)
    {
        $this->ReprogramSentResult = $ReprogramSentResult;
        return $this;
    }
}
