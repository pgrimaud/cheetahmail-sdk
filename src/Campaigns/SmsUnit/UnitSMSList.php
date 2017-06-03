<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class UnitSMSList
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsUnicode
     */
    protected $IsUnicode = null;

    /**
     * @var int $State
     */
    protected $State = null;

    /**
     * @param int $Id
     * @param boolean $IsUnicode
     * @param int $State
     */
    public function __construct($Id, $IsUnicode, $State)
    {
        $this->Id = $Id;
        $this->IsUnicode = $IsUnicode;
        $this->State = $State;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSList
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSList
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
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSList
     */
    public function setIsUnicode($IsUnicode)
    {
        $this->IsUnicode = $IsUnicode;
        return $this;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param int $State
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSList
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }
}
