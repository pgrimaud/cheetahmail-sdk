<?php
namespace Cheetahmail\Campaigns\Configs;

class GetConfigResponse
{

    /**
     * @var ConfigDetails $GetConfigResult
     */
    protected $GetConfigResult = null;

    /**
     * @param ConfigDetails $GetConfigResult
     */
    public function __construct($GetConfigResult)
    {
        $this->GetConfigResult = $GetConfigResult;
    }

    /**
     * @return ConfigDetails
     */
    public function getGetConfigResult()
    {
        return $this->GetConfigResult;
    }

    /**
     * @param ConfigDetails $GetConfigResult
     * @return \Cheetahmail\Campaigns\Configs\GetConfigResponse
     */
    public function setGetConfigResult($GetConfigResult)
    {
        $this->GetConfigResult = $GetConfigResult;
        return $this;
    }
}
