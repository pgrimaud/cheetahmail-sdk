<?php
namespace Cheetahmail\Campaigns\Sms;

class DeleteResponse
{

    /**
     * @var boolean $DeleteResult
     */
    protected $DeleteResult = null;

    /**
     * @param boolean $DeleteResult
     */
    public function __construct($DeleteResult)
    {
        $this->DeleteResult = $DeleteResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteResult()
    {
        return $this->DeleteResult;
    }

    /**
     * @param boolean $DeleteResult
     * @return \Cheetahmail\Campaigns\Sms\DeleteResponse
     */
    public function setDeleteResult($DeleteResult)
    {
        $this->DeleteResult = $DeleteResult;
        return $this;
    }
}
