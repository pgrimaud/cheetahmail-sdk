<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class UnitSMSStats
{

    /**
     * @var int $IdSmsUnit
     */
    protected $IdSmsUnit = null;

    /**
     * @var int $SentNumber
     */
    protected $SentNumber = null;

    /**
     * @var int $Delivered
     */
    protected $Delivered = null;

    /**
     * @var int $DestNumber
     */
    protected $DestNumber = null;

    /**
     * @var int $Bounces
     */
    protected $Bounces = null;

    /**
     * @var int $SMSWithoutInformation
     */
    protected $SMSWithoutInformation = null;

    /**
     * @param int $IdSmsUnit
     * @param int $SentNumber
     * @param int $Delivered
     * @param int $DestNumber
     * @param int $Bounces
     * @param int $SMSWithoutInformation
     */
    public function __construct($IdSmsUnit, $SentNumber, $Delivered, $DestNumber, $Bounces, $SMSWithoutInformation)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        $this->SentNumber = $SentNumber;
        $this->Delivered = $Delivered;
        $this->DestNumber = $DestNumber;
        $this->Bounces = $Bounces;
        $this->SMSWithoutInformation = $SMSWithoutInformation;
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
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSStats
     */
    public function setIdSmsUnit($IdSmsUnit)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        return $this;
    }

    /**
     * @return int
     */
    public function getSentNumber()
    {
        return $this->SentNumber;
    }

    /**
     * @param int $SentNumber
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSStats
     */
    public function setSentNumber($SentNumber)
    {
        $this->SentNumber = $SentNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getDelivered()
    {
        return $this->Delivered;
    }

    /**
     * @param int $Delivered
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSStats
     */
    public function setDelivered($Delivered)
    {
        $this->Delivered = $Delivered;
        return $this;
    }

    /**
     * @return int
     */
    public function getDestNumber()
    {
        return $this->DestNumber;
    }

    /**
     * @param int $DestNumber
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSStats
     */
    public function setDestNumber($DestNumber)
    {
        $this->DestNumber = $DestNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getBounces()
    {
        return $this->Bounces;
    }

    /**
     * @param int $Bounces
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSStats
     */
    public function setBounces($Bounces)
    {
        $this->Bounces = $Bounces;
        return $this;
    }

    /**
     * @return int
     */
    public function getSMSWithoutInformation()
    {
        return $this->SMSWithoutInformation;
    }

    /**
     * @param int $SMSWithoutInformation
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSStats
     */
    public function setSMSWithoutInformation($SMSWithoutInformation)
    {
        $this->SMSWithoutInformation = $SMSWithoutInformation;
        return $this;
    }
}
