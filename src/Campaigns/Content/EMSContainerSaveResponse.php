<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContainerSaveResponse
{

    /**
     * @var int $EMSContainerSaveResult
     */
    protected $EMSContainerSaveResult = null;

    /**
     * @param int $EMSContainerSaveResult
     */
    public function __construct($EMSContainerSaveResult)
    {
        $this->EMSContainerSaveResult = $EMSContainerSaveResult;
    }

    /**
     * @return int
     */
    public function getEMSContainerSaveResult()
    {
        return $this->EMSContainerSaveResult;
    }

    /**
     * @param int $EMSContainerSaveResult
     * @return \Cheetahmail\Campaigns\Content\EMSContainerSaveResponse
     */
    public function setEMSContainerSaveResult($EMSContainerSaveResult)
    {
        $this->EMSContainerSaveResult = $EMSContainerSaveResult;
        return $this;
    }
}
