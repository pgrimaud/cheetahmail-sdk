<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContentDeleteResponse
{

    /**
     * @var boolean $EMSContentDeleteResult
     */
    protected $EMSContentDeleteResult = null;

    /**
     * @param boolean $EMSContentDeleteResult
     */
    public function __construct($EMSContentDeleteResult)
    {
        $this->EMSContentDeleteResult = $EMSContentDeleteResult;
    }

    /**
     * @return boolean
     */
    public function getEMSContentDeleteResult()
    {
        return $this->EMSContentDeleteResult;
    }

    /**
     * @param boolean $EMSContentDeleteResult
     * @return \Cheetahmail\Campaigns\Content\EMSContentDeleteResponse
     */
    public function setEMSContentDeleteResult($EMSContentDeleteResult)
    {
        $this->EMSContentDeleteResult = $EMSContentDeleteResult;
        return $this;
    }
}
