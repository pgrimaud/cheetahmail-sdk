<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContentSaveResponse
{

    /**
     * @var int $EMSContentSaveResult
     */
    protected $EMSContentSaveResult = null;

    /**
     * @param int $EMSContentSaveResult
     */
    public function __construct($EMSContentSaveResult)
    {
        $this->EMSContentSaveResult = $EMSContentSaveResult;
    }

    /**
     * @return int
     */
    public function getEMSContentSaveResult()
    {
        return $this->EMSContentSaveResult;
    }

    /**
     * @param int $EMSContentSaveResult
     * @return \Cheetahmail\Campaigns\Content\EMSContentSaveResponse
     */
    public function setEMSContentSaveResult($EMSContentSaveResult)
    {
        $this->EMSContentSaveResult = $EMSContentSaveResult;
        return $this;
    }
}
