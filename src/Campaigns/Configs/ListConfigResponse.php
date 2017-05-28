<?php
namespace Cheetahmail\Campaigns\Configs;

class ListConfigResponse
{

    /**
     * @var ArrayOfConfigDetails $ListConfigResult
     */
    protected $ListConfigResult = null;

    /**
     * @param ArrayOfConfigDetails $ListConfigResult
     */
    public function __construct($ListConfigResult)
    {
        $this->ListConfigResult = $ListConfigResult;
    }

    /**
     * @return ArrayOfConfigDetails
     */
    public function getListConfigResult()
    {
        return $this->ListConfigResult;
    }

    /**
     * @param ArrayOfConfigDetails $ListConfigResult
     * @return \Cheetahmail\Campaigns\Configs\ListConfigResponse
     */
    public function setListConfigResult($ListConfigResult)
    {
        $this->ListConfigResult = $ListConfigResult;
        return $this;
    }
}
