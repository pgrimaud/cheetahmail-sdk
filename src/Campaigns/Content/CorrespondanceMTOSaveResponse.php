<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceMTOSaveResponse
{

    /**
     * @var int $CorrespondanceMTOSaveResult
     */
    protected $CorrespondanceMTOSaveResult = null;

    /**
     * @param int $CorrespondanceMTOSaveResult
     */
    public function __construct($CorrespondanceMTOSaveResult)
    {
        $this->CorrespondanceMTOSaveResult = $CorrespondanceMTOSaveResult;
    }

    /**
     * @return int
     */
    public function getCorrespondanceMTOSaveResult()
    {
        return $this->CorrespondanceMTOSaveResult;
    }

    /**
     * @param int $CorrespondanceMTOSaveResult
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTOSaveResponse
     */
    public function setCorrespondanceMTOSaveResult($CorrespondanceMTOSaveResult)
    {
        $this->CorrespondanceMTOSaveResult = $CorrespondanceMTOSaveResult;
        return $this;
    }
}
