<?php

namespace Cheetahmail\Campaigns;

class UpdateMessageResponse
{

    /**
     * @var boolean $UpdateMessageResult
     */
    protected $UpdateMessageResult = null;

    /**
     * @param boolean $UpdateMessageResult
     */
    public function __construct($UpdateMessageResult)
    {
      $this->UpdateMessageResult = $UpdateMessageResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateMessageResult()
    {
      return $this->UpdateMessageResult;
    }

    /**
     * @param boolean $UpdateMessageResult
     * @return \Cheetahmail\Campaigns\UpdateMessageResponse
     */
    public function setUpdateMessageResult($UpdateMessageResult)
    {
      $this->UpdateMessageResult = $UpdateMessageResult;
      return $this;
    }

}
