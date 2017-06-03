<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class Create
{

    /**
     * @var CreateUnitSMSCampParam $unitSMSParam
     */
    protected $unitSMSParam = null;

    /**
     * @param CreateUnitSMSCampParam $unitSMSParam
     */
    public function __construct($unitSMSParam)
    {
        $this->unitSMSParam = $unitSMSParam;
    }

    /**
     * @return CreateUnitSMSCampParam
     */
    public function getUnitSMSParam()
    {
        return $this->unitSMSParam;
    }

    /**
     * @param CreateUnitSMSCampParam $unitSMSParam
     * @return \Cheetahmail\Campaigns\SmsUnit\Create
     */
    public function setUnitSMSParam($unitSMSParam)
    {
        $this->unitSMSParam = $unitSMSParam;
        return $this;
    }
}
