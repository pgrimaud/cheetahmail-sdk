<?php

namespace Cheetahmail\ChronoContact;

class Chrono
{

    /**
     * @var int $IdChrono
     */
    protected $IdChrono = null;

    /**
     * @var int $IdTemplate
     */
    protected $IdTemplate = null;

    /**
     * @var int $IdCamp
     */
    protected $IdCamp = null;

    /**
     * @var int $IdList
     */
    protected $IdList = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $IdChrono
     * @param int $IdTemplate
     * @param int $IdCamp
     * @param int $IdList
     */
    public function __construct($IdChrono, $IdTemplate, $IdCamp, $IdList)
    {
        $this->IdChrono = $IdChrono;
        $this->IdTemplate = $IdTemplate;
        $this->IdCamp = $IdCamp;
        $this->IdList = $IdList;
    }

    /**
     * @return int
     */
    public function getIdChrono()
    {
        return $this->IdChrono;
    }

    /**
     * @param int $IdChrono
     * @return \Cheetahmail\ChronoContact\Chrono
     */
    public function setIdChrono($IdChrono)
    {
        $this->IdChrono = $IdChrono;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdTemplate()
    {
        return $this->IdTemplate;
    }

    /**
     * @param int $IdTemplate
     * @return \Cheetahmail\ChronoContact\Chrono
     */
    public function setIdTemplate($IdTemplate)
    {
        $this->IdTemplate = $IdTemplate;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCamp()
    {
        return $this->IdCamp;
    }

    /**
     * @param int $IdCamp
     * @return \Cheetahmail\ChronoContact\Chrono
     */
    public function setIdCamp($IdCamp)
    {
        $this->IdCamp = $IdCamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdList()
    {
        return $this->IdList;
    }

    /**
     * @param int $IdList
     * @return \Cheetahmail\ChronoContact\Chrono
     */
    public function setIdList($IdList)
    {
        $this->IdList = $IdList;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Cheetahmail\ChronoContact\Chrono
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
}
