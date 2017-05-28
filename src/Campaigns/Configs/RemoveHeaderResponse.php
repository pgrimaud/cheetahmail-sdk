<?php
namespace Cheetahmail\Campaigns\Configs;

class RemoveHeaderResponse
{

    /**
     * @var boolean $RemoveHeaderResult
     */
    protected $RemoveHeaderResult = null;

    /**
     * @param boolean $RemoveHeaderResult
     */
    public function __construct($RemoveHeaderResult)
    {
        $this->RemoveHeaderResult = $RemoveHeaderResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveHeaderResult()
    {
        return $this->RemoveHeaderResult;
    }

    /**
     * @param boolean $RemoveHeaderResult
     * @return \Cheetahmail\Campaigns\Configs\RemoveHeaderResponse
     */
    public function setRemoveHeaderResult($RemoveHeaderResult)
    {
        $this->RemoveHeaderResult = $RemoveHeaderResult;
        return $this;
    }
}
