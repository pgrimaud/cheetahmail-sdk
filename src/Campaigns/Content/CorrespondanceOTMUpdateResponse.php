<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceOTMUpdateResponse
{

    /**
     * @var boolean $CorrespondanceOTMUpdateResult
     */
    protected $CorrespondanceOTMUpdateResult = null;

    /**
     * @param boolean $CorrespondanceOTMUpdateResult
     */
    public function __construct($CorrespondanceOTMUpdateResult)
    {
        $this->CorrespondanceOTMUpdateResult = $CorrespondanceOTMUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getCorrespondanceOTMUpdateResult()
    {
        return $this->CorrespondanceOTMUpdateResult;
    }

    /**
     * @param boolean $CorrespondanceOTMUpdateResult
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdateResponse
     */
    public function setCorrespondanceOTMUpdateResult($CorrespondanceOTMUpdateResult)
    {
        $this->CorrespondanceOTMUpdateResult = $CorrespondanceOTMUpdateResult;
        return $this;
    }
}
