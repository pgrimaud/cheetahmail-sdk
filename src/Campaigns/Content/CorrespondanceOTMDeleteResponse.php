<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceOTMDeleteResponse
{

    /**
     * @var boolean $CorrespondanceOTMDeleteResult
     */
    protected $CorrespondanceOTMDeleteResult = null;

    /**
     * @param boolean $CorrespondanceOTMDeleteResult
     */
    public function __construct($CorrespondanceOTMDeleteResult)
    {
        $this->CorrespondanceOTMDeleteResult = $CorrespondanceOTMDeleteResult;
    }

    /**
     * @return boolean
     */
    public function getCorrespondanceOTMDeleteResult()
    {
        return $this->CorrespondanceOTMDeleteResult;
    }

    /**
     * @param boolean $CorrespondanceOTMDeleteResult
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMDeleteResponse
     */
    public function setCorrespondanceOTMDeleteResult($CorrespondanceOTMDeleteResult)
    {
        $this->CorrespondanceOTMDeleteResult = $CorrespondanceOTMDeleteResult;
        return $this;
    }
}
