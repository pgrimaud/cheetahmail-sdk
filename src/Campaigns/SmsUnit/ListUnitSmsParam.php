<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class ListUnitSmsParam
{

    /**
     * @var int $Start
     */
    protected $Start = null;

    /**
     * @var int $Rows
     */
    protected $Rows = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @param int $Start
     * @param int $Rows
     * @param int $Order
     */
    public function __construct($Start, $Rows, $Order)
    {
        $this->Start = $Start;
        $this->Rows = $Rows;
        $this->Order = $Order;
    }

    /**
     * @return int
     */
    public function getStart()
    {
        return $this->Start;
    }

    /**
     * @param int $Start
     * @return \Cheetahmail\Campaigns\SmsUnit\ListUnitSmsParam
     */
    public function setStart($Start)
    {
        $this->Start = $Start;
        return $this;
    }

    /**
     * @return int
     */
    public function getRows()
    {
        return $this->Rows;
    }

    /**
     * @param int $Rows
     * @return \Cheetahmail\Campaigns\SmsUnit\ListUnitSmsParam
     */
    public function setRows($Rows)
    {
        $this->Rows = $Rows;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param int $Order
     * @return \Cheetahmail\Campaigns\SmsUnit\ListUnitSmsParam
     */
    public function setOrder($Order)
    {
        $this->Order = $Order;
        return $this;
    }
}
