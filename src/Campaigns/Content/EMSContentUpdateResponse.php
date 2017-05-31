<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContentUpdateResponse
{

    /**
     * @var int $EMSContentUpdateResult
     */
    protected $EMSContentUpdateResult = null;

    /**
     * @param int $EMSContentUpdateResult
     */
    public function __construct($EMSContentUpdateResult)
    {
        $this->EMSContentUpdateResult = $EMSContentUpdateResult;
    }

    /**
     * @return int
     */
    public function getEMSContentUpdateResult()
    {
        return $this->EMSContentUpdateResult;
    }

    /**
     * @param int $EMSContentUpdateResult
     * @return \Cheetahmail\Campaigns\Content\EMSContentUpdateResponse
     */
    public function setEMSContentUpdateResult($EMSContentUpdateResult)
    {
        $this->EMSContentUpdateResult = $EMSContentUpdateResult;
        return $this;
    }
}
