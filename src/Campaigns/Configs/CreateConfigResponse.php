<?php
namespace Cheetahmail\Campaigns\Configs;

class CreateConfigResponse
{

    /**
     * @var int $CreateConfigResult
     */
    protected $CreateConfigResult = null;

    /**
     * @param int $CreateConfigResult
     */
    public function __construct($CreateConfigResult)
    {
        $this->CreateConfigResult = $CreateConfigResult;
    }

    /**
     * @return int
     */
    public function getCreateConfigResult()
    {
        return $this->CreateConfigResult;
    }

    /**
     * @param int $CreateConfigResult
     * @return \Cheetahmail\Campaigns\Configs\CreateConfigResponse
     */
    public function setCreateConfigResult($CreateConfigResult)
    {
        $this->CreateConfigResult = $CreateConfigResult;
        return $this;
    }
}
