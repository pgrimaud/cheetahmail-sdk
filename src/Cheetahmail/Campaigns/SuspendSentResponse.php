<?php
namespace Cheetahmail\Campaigns;

class SuspendSentResponse
{

    /**
     * @var boolean $SuspendSentResult
     */
    protected $SuspendSentResult = null;

    /**
     * @param boolean $SuspendSentResult
     */
    public function __construct($SuspendSentResult)
    {
      $this->SuspendSentResult = $SuspendSentResult;
    }

    /**
     * @return boolean
     */
    public function getSuspendSentResult()
    {
      return $this->SuspendSentResult;
    }

    /**
     * @param boolean $SuspendSentResult
     * @return \Cheetahmail\Campaigns\SuspendSentResponse
     */
    public function setSuspendSentResult($SuspendSentResult)
    {
      $this->SuspendSentResult = $SuspendSentResult;
      return $this;
    }

}
