<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceMTODeleteResponse
{

    /**
     * @var boolean $CorrespondanceMTODeleteResult
     */
    protected $CorrespondanceMTODeleteResult = null;

    /**
     * @param boolean $CorrespondanceMTODeleteResult
     */
    public function __construct($CorrespondanceMTODeleteResult)
    {
        $this->CorrespondanceMTODeleteResult = $CorrespondanceMTODeleteResult;
    }

    /**
     * @return boolean
     */
    public function getCorrespondanceMTODeleteResult()
    {
        return $this->CorrespondanceMTODeleteResult;
    }

    /**
     * @param boolean $CorrespondanceMTODeleteResult
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTODeleteResponse
     */
    public function setCorrespondanceMTODeleteResult($CorrespondanceMTODeleteResult)
    {
        $this->CorrespondanceMTODeleteResult = $CorrespondanceMTODeleteResult;
        return $this;
    }
}
