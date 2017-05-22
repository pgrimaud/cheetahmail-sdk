<?php

namespace Cheetahmail\Data\Subscribers;

class UnsubscribeByTisIdResponse
{

    /**
     * @var boolean $UnsubscribeByTisIdResult
     */
    protected $UnsubscribeByTisIdResult = null;

    /**
     * @param boolean $UnsubscribeByTisIdResult
     */
    public function __construct($UnsubscribeByTisIdResult)
    {
      $this->UnsubscribeByTisIdResult = $UnsubscribeByTisIdResult;
    }

    /**
     * @return boolean
     */
    public function getUnsubscribeByTisIdResult()
    {
      return $this->UnsubscribeByTisIdResult;
    }

    /**
     * @param boolean $UnsubscribeByTisIdResult
     * @return \Cheetahmail\Data\Subscribers\UnsubscribeByTisIdResponse
     */
    public function setUnsubscribeByTisIdResult($UnsubscribeByTisIdResult)
    {
      $this->UnsubscribeByTisIdResult = $UnsubscribeByTisIdResult;
      return $this;
    }

}
