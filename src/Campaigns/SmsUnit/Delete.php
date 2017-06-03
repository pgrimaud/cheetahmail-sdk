<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class Delete
{

    /**
     * @var int $IdSmsUnit
     */
    protected $IdSmsUnit = null;

    /**
     * @param int $IdSmsUnit
     */
    public function __construct($IdSmsUnit)
    {
        $this->IdSmsUnit = $IdSmsUnit;
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
     * @return \Cheetahmail\Campaigns\SmsUnit\Delete
     */
    public function setIdSmsUnit($IdSmsUnit)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        return $this;
    }
}
