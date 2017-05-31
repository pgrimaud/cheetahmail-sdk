<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContainerDeleteResponse
{

    /**
     * @var boolean $EMSContainerDeleteResult
     */
    protected $EMSContainerDeleteResult = null;

    /**
     * @param boolean $EMSContainerDeleteResult
     */
    public function __construct($EMSContainerDeleteResult)
    {
        $this->EMSContainerDeleteResult = $EMSContainerDeleteResult;
    }

    /**
     * @return boolean
     */
    public function getEMSContainerDeleteResult()
    {
        return $this->EMSContainerDeleteResult;
    }

    /**
     * @param boolean $EMSContainerDeleteResult
     * @return \Cheetahmail\Campaigns\Content\EMSContainerDeleteResponse
     */
    public function setEMSContainerDeleteResult($EMSContainerDeleteResult)
    {
        $this->EMSContainerDeleteResult = $EMSContainerDeleteResult;
        return $this;
    }
}
