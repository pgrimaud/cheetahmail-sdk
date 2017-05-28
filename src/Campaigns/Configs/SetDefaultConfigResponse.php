<?php
namespace Cheetahmail\Campaigns\Configs;

class SetDefaultConfigResponse
{

    /**
     * @var boolean $SetDefaultConfigResult
     */
    protected $SetDefaultConfigResult = null;

    /**
     * @param boolean $SetDefaultConfigResult
     */
    public function __construct($SetDefaultConfigResult)
    {
        $this->SetDefaultConfigResult = $SetDefaultConfigResult;
    }

    /**
     * @return boolean
     */
    public function getSetDefaultConfigResult()
    {
        return $this->SetDefaultConfigResult;
    }

    /**
     * @param boolean $SetDefaultConfigResult
     * @return \Cheetahmail\Campaigns\Configs\SetDefaultConfigResponse
     */
    public function setSetDefaultConfigResult($SetDefaultConfigResult)
    {
        $this->SetDefaultConfigResult = $SetDefaultConfigResult;
        return $this;
    }
}
