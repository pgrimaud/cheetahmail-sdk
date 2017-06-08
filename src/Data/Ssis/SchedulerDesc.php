<?php
namespace Cheetahmail\Data\Ssis;

class SchedulerDesc
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfInt $DayList
     */
    protected $DayList = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var int $IdMlist
     */
    protected $IdMlist = null;

    /**
     * @var int $Minute
     */
    protected $Minute = null;

    /**
     * @var int $Hour
     */
    protected $Hour = null;

    /**
     * @var int $Day
     */
    protected $Day = null;

    /**
     * @var int $IdMap
     */
    protected $IdMap = null;

    /**
     * @var EMSFrequencyTypes $Frequency
     */
    protected $Frequency = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @param int $IdMlist
     * @param int $Minute
     * @param int $Hour
     * @param int $Day
     * @param int $IdMap
     * @param EMSFrequencyTypes $Frequency
     * @param boolean $Enabled
     */
    public function __construct($IdMlist, $Minute, $Hour, $Day, $IdMap, $Frequency, $Enabled)
    {
        $this->IdMlist = $IdMlist;
        $this->Minute = $Minute;
        $this->Hour = $Hour;
        $this->Day = $Day;
        $this->IdMap = $IdMap;
        $this->Frequency = $Frequency;
        $this->Enabled = $Enabled;
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
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getDayList()
    {
        return $this->DayList;
    }

    /**
     * @param ArrayOfInt $DayList
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setDayList($DayList)
    {
        $this->DayList = $DayList;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdMlist()
    {
        return $this->IdMlist;
    }

    /**
     * @param int $IdMlist
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setIdMlist($IdMlist)
    {
        $this->IdMlist = $IdMlist;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinute()
    {
        return $this->Minute;
    }

    /**
     * @param int $Minute
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setMinute($Minute)
    {
        $this->Minute = $Minute;
        return $this;
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return $this->Hour;
    }

    /**
     * @param int $Hour
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setHour($Hour)
    {
        $this->Hour = $Hour;
        return $this;
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param int $Day
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setDay($Day)
    {
        $this->Day = $Day;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdMap()
    {
        return $this->IdMap;
    }

    /**
     * @param int $IdMap
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setIdMap($IdMap)
    {
        $this->IdMap = $IdMap;
        return $this;
    }

    /**
     * @return EMSFrequencyTypes
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }

    /**
     * @param EMSFrequencyTypes $Frequency
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setFrequency($Frequency)
    {
        $this->Frequency = $Frequency;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * @param boolean $Enabled
     * @return \Cheetahmail\Data\Ssis\SchedulerDesc
     */
    public function setEnabled($Enabled)
    {
        $this->Enabled = $Enabled;
        return $this;
    }
}
