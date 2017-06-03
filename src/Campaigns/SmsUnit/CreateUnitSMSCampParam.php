<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class CreateUnitSMSCampParam
{

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
     * @param boolean $IsUnicode
     * @param int $Field
     */
    public function __construct($IsUnicode, $Field)
    {
        $this->IsUnicode = $IsUnicode;
        $this->Field = $Field;
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
     * @return \Cheetahmail\Campaigns\SmsUnit\CreateUnitSMSCampParam
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
     * @return \Cheetahmail\Campaigns\SmsUnit\CreateUnitSMSCampParam
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
     * @return \Cheetahmail\Campaigns\SmsUnit\CreateUnitSMSCampParam
     */
    public function setField($Field)
    {
        $this->Field = $Field;
        return $this;
    }
}
