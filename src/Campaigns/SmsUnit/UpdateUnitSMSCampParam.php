<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class UpdateUnitSMSCampParam
{

    /**
     * @var int $IdSmsUnit
     */
    protected $IdSmsUnit = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsUnicode
     */
    protected $IsUnicode = null;

    /**
     * @var int $Field
     */
    protected $Field = null;

    /**
     * @param int $IdSmsUnit
     * @param boolean $IsUnicode
     * @param int $Field
     */
    public function __construct($IdSmsUnit, $IsUnicode, $Field)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        $this->IsUnicode = $IsUnicode;
        $this->Field = $Field;
    }

    /**
     * @return int
     */
    public function getIdSmsUnit()
    {
        return $this->IdSmsUnit;
    }

    /**
     * @param int $IdSmsUnit
     * @return \Cheetahmail\Campaigns\SmsUnit\UpdateUnitSMSCampParam
     */
    public function setIdSmsUnit($IdSmsUnit)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Cheetahmail\Campaigns\SmsUnit\UpdateUnitSMSCampParam
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUnicode()
    {
        return $this->IsUnicode;
    }

    /**
     * @param boolean $IsUnicode
     * @return \Cheetahmail\Campaigns\SmsUnit\UpdateUnitSMSCampParam
     */
    public function setIsUnicode($IsUnicode)
    {
        $this->IsUnicode = $IsUnicode;
        return $this;
    }

    /**
     * @return int
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * @param int $Field
     * @return \Cheetahmail\Campaigns\SmsUnit\UpdateUnitSMSCampParam
     */
    public function setField($Field)
    {
        $this->Field = $Field;
        return $this;
    }
}
