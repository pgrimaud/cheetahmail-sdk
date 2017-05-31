<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceOTMSaveResponse
{

    /**
     * @var int $CorrespondanceOTMSaveResult
     */
    protected $CorrespondanceOTMSaveResult = null;

    /**
     * @param int $CorrespondanceOTMSaveResult
     */
    public function __construct($CorrespondanceOTMSaveResult)
    {
        $this->CorrespondanceOTMSaveResult = $CorrespondanceOTMSaveResult;
    }

    /**
     * @return int
     */
    public function getCorrespondanceOTMSaveResult()
    {
        return $this->CorrespondanceOTMSaveResult;
    }

    /**
     * @param int $CorrespondanceOTMSaveResult
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMSaveResponse
     */
    public function setCorrespondanceOTMSaveResult($CorrespondanceOTMSaveResult)
    {
        $this->CorrespondanceOTMSaveResult = $CorrespondanceOTMSaveResult;
        return $this;
    }
}
