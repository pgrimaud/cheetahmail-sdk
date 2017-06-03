<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class ListCustom
{

    /**
     * @var ListUnitSmsParam $unitSMSParam
     */
    protected $unitSMSParam = null;

    /**
     * @param ListUnitSmsParam $unitSMSParam
     */
    public function __construct($unitSMSParam)
    {
        $this->unitSMSParam = $unitSMSParam;
    }

    /**
     * @return ListUnitSmsParam
     */
    public function getUnitSMSParam()
    {
        return $this->unitSMSParam;
    }

    /**
     * @param ListUnitSmsParam $unitSMSParam
     * @return \Cheetahmail\Campaigns\SmsUnit\List
     */
    public function setUnitSMSParam($unitSMSParam)
    {
        $this->unitSMSParam = $unitSMSParam;
        return $this;
    }
}
