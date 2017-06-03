<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class UnitSMSCampaign
{

    /**
     * @var int $IDSmsUnit
     */
    protected $IDSmsUnit = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $NumberOfSend
     */
    protected $NumberOfSend = null;

    /**
     * @var boolean $IsUnicode
     */
    protected $IsUnicode = null;

    /**
     * @var int $State
     */
    protected $State = null;

    /**
     * @param int $IDSmsUnit
     * @param int $NumberOfSend
     * @param boolean $IsUnicode
     * @param int $State
     */
    public function __construct($IDSmsUnit, $NumberOfSend, $IsUnicode, $State)
    {
        $this->IDSmsUnit = $IDSmsUnit;
        $this->NumberOfSend = $NumberOfSend;
        $this->IsUnicode = $IsUnicode;
        $this->State = $State;
    }

    /**
     * @return int
     */
    public function getIDSmsUnit()
    {
        return $this->IDSmsUnit;
    }

    /**
     * @param int $IDSmsUnit
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSCampaign
     */
    public function setIDSmsUnit($IDSmsUnit)
    {
        $this->IDSmsUnit = $IDSmsUnit;
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
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSCampaign
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfSend()
    {
        return $this->NumberOfSend;
    }

    /**
     * @param int $NumberOfSend
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSCampaign
     */
    public function setNumberOfSend($NumberOfSend)
    {
        $this->NumberOfSend = $NumberOfSend;
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
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSCampaign
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
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSCampaign
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }
}
