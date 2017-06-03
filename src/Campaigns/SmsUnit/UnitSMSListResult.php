<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class UnitSMSListResult
{

    /**
     * @var ArrayOfUnitSMSList $SmsList
     */
    protected $SmsList = null;

    /**
     * @var boolean $HasMore
     */
    protected $HasMore = null;

    /**
     * @var int $Total
     */
    protected $Total = null;

    /**
     * @param boolean $HasMore
     * @param int $Total
     */
    public function __construct($HasMore, $Total)
    {
        $this->HasMore = $HasMore;
        $this->Total = $Total;
    }

    /**
     * @return ArrayOfUnitSMSList
     */
    public function getSmsList()
    {
        return $this->SmsList;
    }

    /**
     * @param ArrayOfUnitSMSList $SmsList
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSListResult
     */
    public function setSmsList($SmsList)
    {
        $this->SmsList = $SmsList;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMore()
    {
        return $this->HasMore;
    }

    /**
     * @param boolean $HasMore
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSListResult
     */
    public function setHasMore($HasMore)
    {
        $this->HasMore = $HasMore;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param int $Total
     * @return \Cheetahmail\Campaigns\SmsUnit\UnitSMSListResult
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
        return $this;
    }
}
