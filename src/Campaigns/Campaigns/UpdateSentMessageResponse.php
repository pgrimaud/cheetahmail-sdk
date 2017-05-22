<?php
namespace Cheetahmail\Campaigns\Campaigns;

class UpdateSentMessageResponse
{

    /**
     * @var boolean $UpdateSentMessageResult
     */
    protected $UpdateSentMessageResult = null;

    /**
     * @param boolean $UpdateSentMessageResult
     */
    public function __construct($UpdateSentMessageResult)
    {
        $this->UpdateSentMessageResult = $UpdateSentMessageResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSentMessageResult()
    {
        return $this->UpdateSentMessageResult;
    }

    /**
     * @param boolean $UpdateSentMessageResult
     * @return \Cheetahmail\Campaigns\Campaigns\UpdateSentMessageResponse
     */
    public function setUpdateSentMessageResult($UpdateSentMessageResult)
    {
        $this->UpdateSentMessageResult = $UpdateSentMessageResult;
        return $this;
    }
}
