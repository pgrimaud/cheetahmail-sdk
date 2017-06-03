<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class Update
{

    /**
     * @var UpdateUnitSMSCampParam $unitSMSCamp
     */
    protected $unitSMSCamp = null;

    /**
     * @param UpdateUnitSMSCampParam $unitSMSCamp
     */
    public function __construct($unitSMSCamp)
    {
        $this->unitSMSCamp = $unitSMSCamp;
    }

    /**
     * @return UpdateUnitSMSCampParam
     */
    public function getUnitSMSCamp()
    {
        return $this->unitSMSCamp;
    }

    /**
     * @param UpdateUnitSMSCampParam $unitSMSCamp
     * @return \Cheetahmail\Campaigns\SmsUnit\Update
     */
    public function setUnitSMSCamp($unitSMSCamp)
    {
        $this->unitSMSCamp = $unitSMSCamp;
        return $this;
    }
}
