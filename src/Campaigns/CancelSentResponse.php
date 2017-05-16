<?php
namespace Cheetahmail\Campaigns;

class CancelSentResponse
{

    /**
     * @var boolean $CancelSentResult
     */
    protected $CancelSentResult = null;

    /**
     * @param boolean $CancelSentResult
     */
    public function __construct($CancelSentResult)
    {
      $this->CancelSentResult = $CancelSentResult;
    }

    /**
     * @return boolean
     */
    public function getCancelSentResult()
    {
      return $this->CancelSentResult;
    }

    /**
     * @param boolean $CancelSentResult
     * @return \Cheetahmail\Campaigns\CancelSentResponse
     */
    public function setCancelSentResult($CancelSentResult)
    {
      $this->CancelSentResult = $CancelSentResult;
      return $this;
    }

}
