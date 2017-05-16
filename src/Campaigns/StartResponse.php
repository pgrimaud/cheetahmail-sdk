<?php
namespace Cheetahmail\Campaigns;

class StartResponse
{

    /**
     * @var boolean $StartResult
     */
    protected $StartResult = null;

    /**
     * @param boolean $StartResult
     */
    public function __construct($StartResult)
    {
        $this->StartResult = $StartResult;
    }

    /**
     * @return boolean
     */
    public function getStartResult()
    {
        return $this->StartResult;
    }

    /**
     * @param boolean $StartResult
     * @return \Cheetahmail\Campaigns\StartResponse
     */
    public function setStartResult($StartResult)
    {
        $this->StartResult = $StartResult;
        return $this;
    }
}
