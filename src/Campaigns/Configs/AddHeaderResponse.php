<?php
namespace Cheetahmail\Campaigns\Configs;

class AddHeaderResponse
{

    /**
     * @var boolean $AddHeaderResult
     */
    protected $AddHeaderResult = null;

    /**
     * @param boolean $AddHeaderResult
     */
    public function __construct($AddHeaderResult)
    {
        $this->AddHeaderResult = $AddHeaderResult;
    }

    /**
     * @return boolean
     */
    public function getAddHeaderResult()
    {
        return $this->AddHeaderResult;
    }

    /**
     * @param boolean $AddHeaderResult
     * @return \Cheetahmail\Campaigns\Configs\AddHeaderResponse
     */
    public function setAddHeaderResult($AddHeaderResult)
    {
        $this->AddHeaderResult = $AddHeaderResult;
        return $this;
    }
}
