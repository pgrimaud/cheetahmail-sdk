<?php
namespace Cheetahmail\Campaigns\Configs;

class UpdateConfigResponse
{

    /**
     * @var boolean $UpdateConfigResult
     */
    protected $UpdateConfigResult = null;

    /**
     * @param boolean $UpdateConfigResult
     */
    public function __construct($UpdateConfigResult)
    {
        $this->UpdateConfigResult = $UpdateConfigResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateConfigResult()
    {
        return $this->UpdateConfigResult;
    }

    /**
     * @param boolean $UpdateConfigResult
     * @return \Cheetahmail\Campaigns\Configs\UpdateConfigResponse
     */
    public function setUpdateConfigResult($UpdateConfigResult)
    {
        $this->UpdateConfigResult = $UpdateConfigResult;
        return $this;
    }
}
