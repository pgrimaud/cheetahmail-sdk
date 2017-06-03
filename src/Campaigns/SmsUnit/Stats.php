<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class Stats
{

    /**
     * @var int $IdSmsUnit
     */
    protected $IdSmsUnit = null;

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param int $IdSmsUnit
     * @param \DateTime $BeginDate
     * @param \DateTime $EndDate
     */
    public function __construct($IdSmsUnit, \DateTime $BeginDate, \DateTime $EndDate)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
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
     * @return \Cheetahmail\Campaigns\SmsUnit\Stats
     */
    public function setIdSmsUnit($IdSmsUnit)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
        if ($this->BeginDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BeginDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BeginDate
     * @return \Cheetahmail\Campaigns\SmsUnit\Stats
     */
    public function setBeginDate(\DateTime $BeginDate)
    {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Cheetahmail\Campaigns\SmsUnit\Stats
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }
}
