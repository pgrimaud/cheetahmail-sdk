<?php
namespace Cheetahmail\Campaigns\Campaigns;

class UpdateSentParamsResponse
{

    /**
     * @var boolean $UpdateSentParamsResult
     */
    protected $UpdateSentParamsResult = null;

    /**
     * @param boolean $UpdateSentParamsResult
     */
    public function __construct($UpdateSentParamsResult)
    {
        $this->UpdateSentParamsResult = $UpdateSentParamsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSentParamsResult()
    {
        return $this->UpdateSentParamsResult;
    }

    /**
     * @param boolean $UpdateSentParamsResult
     * @return \Cheetahmail\Campaigns\Campaigns\UpdateSentParamsResponse
     */
    public function setUpdateSentParamsResult($UpdateSentParamsResult)
    {
        $this->UpdateSentParamsResult = $UpdateSentParamsResult;
        return $this;
    }
}
