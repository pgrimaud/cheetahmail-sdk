<?php
namespace Cheetahmail\Campaigns\Configs;

class DeleteConfigResponse
{

    /**
     * @var boolean $DeleteConfigResult
     */
    protected $DeleteConfigResult = null;

    /**
     * @param boolean $DeleteConfigResult
     */
    public function __construct($DeleteConfigResult)
    {
        $this->DeleteConfigResult = $DeleteConfigResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteConfigResult()
    {
        return $this->DeleteConfigResult;
    }

    /**
     * @param boolean $DeleteConfigResult
     * @return \Cheetahmail\Campaigns\Configs\DeleteConfigResponse
     */
    public function setDeleteConfigResult($DeleteConfigResult)
    {
        $this->DeleteConfigResult = $DeleteConfigResult;
        return $this;
    }
}
