<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceMTOUpdateResponse
{

    /**
     * @var boolean $CorrespondanceMTOUpdateResult
     */
    protected $CorrespondanceMTOUpdateResult = null;

    /**
     * @param boolean $CorrespondanceMTOUpdateResult
     */
    public function __construct($CorrespondanceMTOUpdateResult)
    {
        $this->CorrespondanceMTOUpdateResult = $CorrespondanceMTOUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getCorrespondanceMTOUpdateResult()
    {
        return $this->CorrespondanceMTOUpdateResult;
    }

    /**
     * @param boolean $CorrespondanceMTOUpdateResult
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTOUpdateResponse
     */
    public function setCorrespondanceMTOUpdateResult($CorrespondanceMTOUpdateResult)
    {
        $this->CorrespondanceMTOUpdateResult = $CorrespondanceMTOUpdateResult;
        return $this;
    }
}
