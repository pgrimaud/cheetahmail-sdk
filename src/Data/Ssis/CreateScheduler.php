<?php
namespace Cheetahmail\Data\Ssis;

class CreateScheduler
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $mappingId
     */
    protected $mappingId = null;

    /**
     * @var ArrayOfInt $DayOfWeeklist
     */
    protected $DayOfWeeklist = null;

    /**
     * @var int $hour
     */
    protected $hour = null;

    /**
     * @var int $minute
     */
    protected $minute = null;

    /**
     * @var int $dayOfMonth
     */
    protected $dayOfMonth = null;

    /**
     * @var EMSFrequencyTypes $frequency
     */
    protected $frequency = null;

    /**
     * @var boolean $enable
     */
    protected $enable = null;

    /**
     * @param string $name
     * @param int $mappingId
     * @param ArrayOfInt $DayOfWeeklist
     * @param int $hour
     * @param int $minute
     * @param int $dayOfMonth
     * @param EMSFrequencyTypes $frequency
     * @param boolean $enable
     */
    public function __construct($name, $mappingId, $DayOfWeeklist, $hour, $minute, $dayOfMonth, $frequency, $enable)
    {
        $this->name = $name;
        $this->mappingId = $mappingId;
        $this->DayOfWeeklist = $DayOfWeeklist;
        $this->hour = $hour;
        $this->minute = $minute;
        $this->dayOfMonth = $dayOfMonth;
        $this->frequency = $frequency;
        $this->enable = $enable;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getMappingId()
    {
        return $this->mappingId;
    }

    /**
     * @param int $mappingId
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setMappingId($mappingId)
    {
        $this->mappingId = $mappingId;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getDayOfWeeklist()
    {
        return $this->DayOfWeeklist;
    }

    /**
     * @param ArrayOfInt $DayOfWeeklist
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setDayOfWeeklist($DayOfWeeklist)
    {
        $this->DayOfWeeklist = $DayOfWeeklist;
        return $this;
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param int $hour
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @param int $minute
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
        return $this;
    }

    /**
     * @return int
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * @param int $dayOfMonth
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * @return EMSFrequencyTypes
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param EMSFrequencyTypes $frequency
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * @param boolean $enable
     * @return \Cheetahmail\Data\Ssis\CreateScheduler
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }
}
