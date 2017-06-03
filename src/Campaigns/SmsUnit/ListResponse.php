<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class ListResponse
{

    /**
     * @var UnitSMSListResult $ListResult
     */
    protected $ListResult = null;

    /**
     * @param UnitSMSListResult $ListResult
     */
    public function __construct($ListResult)
    {
        $this->ListResult = $ListResult;
    }

    /**
     * @return UnitSMSListResult
     */
    public function getListResult()
    {
        return $this->ListResult;
    }

    /**
     * @param UnitSMSListResult $ListResult
     * @return \Cheetahmail\Campaigns\SmsUnit\ListResponse
     */
    public function setListResult($ListResult)
    {
        $this->ListResult = $ListResult;
        return $this;
    }
}
