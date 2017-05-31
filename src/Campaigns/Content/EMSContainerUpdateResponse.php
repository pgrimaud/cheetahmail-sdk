<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContainerUpdateResponse
{

    /**
     * @var int $EMSContainerUpdateResult
     */
    protected $EMSContainerUpdateResult = null;

    /**
     * @param int $EMSContainerUpdateResult
     */
    public function __construct($EMSContainerUpdateResult)
    {
        $this->EMSContainerUpdateResult = $EMSContainerUpdateResult;
    }

    /**
     * @return int
     */
    public function getEMSContainerUpdateResult()
    {
        return $this->EMSContainerUpdateResult;
    }

    /**
     * @param int $EMSContainerUpdateResult
     * @return \Cheetahmail\Campaigns\Content\EMSContainerUpdateResponse
     */
    public function setEMSContainerUpdateResult($EMSContainerUpdateResult)
    {
        $this->EMSContainerUpdateResult = $EMSContainerUpdateResult;
        return $this;
    }
}
