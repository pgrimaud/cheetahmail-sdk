<?php

namespace Cheetahmail\Data\Subscribers;

class UnsubscribeResponse
{

    /**
     * @var boolean $UnsubscribeResult
     */
    protected $UnsubscribeResult = null;

    /**
     * @param boolean $UnsubscribeResult
     */
    public function __construct($UnsubscribeResult)
    {
      $this->UnsubscribeResult = $UnsubscribeResult;
    }

    /**
     * @return boolean
     */
    public function getUnsubscribeResult()
    {
      return $this->UnsubscribeResult;
    }

    /**
     * @param boolean $UnsubscribeResult
     * @return \Cheetahmail\Data\Subscribers\UnsubscribeResponse
     */
    public function setUnsubscribeResult($UnsubscribeResult)
    {
      $this->UnsubscribeResult = $UnsubscribeResult;
      return $this;
    }

}
