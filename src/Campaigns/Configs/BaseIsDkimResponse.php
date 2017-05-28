<?php
namespace Cheetahmail\Campaigns\Configs;

class BaseIsDkimResponse
{

    /**
     * @var boolean $BaseIsDkimResult
     */
    protected $BaseIsDkimResult = null;

    /**
     * @param boolean $BaseIsDkimResult
     */
    public function __construct($BaseIsDkimResult)
    {
        $this->BaseIsDkimResult = $BaseIsDkimResult;
    }

    /**
     * @return boolean
     */
    public function getBaseIsDkimResult()
    {
        return $this->BaseIsDkimResult;
    }

    /**
     * @param boolean $BaseIsDkimResult
     * @return \Cheetahmail\Campaigns\Configs\BaseIsDkimResponse
     */
    public function setBaseIsDkimResult($BaseIsDkimResult)
    {
        $this->BaseIsDkimResult = $BaseIsDkimResult;
        return $this;
    }
}
