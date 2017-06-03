<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class Get
{

    /**
     * @var int $IDSmsUnit
     */
    protected $IDSmsUnit = null;

    /**
     * @param int $IDSmsUnit
     */
    public function __construct($IDSmsUnit)
    {
        $this->IDSmsUnit = $IDSmsUnit;
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
     * @return \Cheetahmail\Campaigns\SmsUnit\Get
     */
    public function setIDSmsUnit($IDSmsUnit)
    {
        $this->IDSmsUnit = $IDSmsUnit;
        return $this;
    }
}
