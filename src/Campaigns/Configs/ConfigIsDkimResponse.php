<?php
namespace Cheetahmail\Campaigns\Configs;

class ConfigIsDkimResponse
{

    /**
     * @var boolean $ConfigIsDkimResult
     */
    protected $ConfigIsDkimResult = null;

    /**
     * @param boolean $ConfigIsDkimResult
     */
    public function __construct($ConfigIsDkimResult)
    {
        $this->ConfigIsDkimResult = $ConfigIsDkimResult;
    }

    /**
     * @return boolean
     */
    public function getConfigIsDkimResult()
    {
        return $this->ConfigIsDkimResult;
    }

    /**
     * @param boolean $ConfigIsDkimResult
     * @return \Cheetahmail\Campaigns\Configs\ConfigIsDkimResponse
     */
    public function setConfigIsDkimResult($ConfigIsDkimResult)
    {
        $this->ConfigIsDkimResult = $ConfigIsDkimResult;
        return $this;
    }
}
