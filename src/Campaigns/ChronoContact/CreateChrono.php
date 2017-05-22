<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class CreateChrono
{

    /**
     * @var string $ChronoName
     */
    protected $ChronoName = null;

    /**
     * @var int $IdCampagne
     */
    protected $IdCampagne = null;

    /**
     * @var int $IdTemplate
     */
    protected $IdTemplate = null;

    /**
     * @param string $ChronoName
     * @param int $IdCampagne
     * @param int $IdTemplate
     */
    public function __construct($ChronoName, $IdCampagne, $IdTemplate)
    {
        $this->ChronoName = $ChronoName;
        $this->IdCampagne = $IdCampagne;
        $this->IdTemplate = $IdTemplate;
    }

    /**
     * @return string
     */
    public function getChronoName()
    {
        return $this->ChronoName;
    }

    /**
     * @param string $ChronoName
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateChrono
     */
    public function setChronoName($ChronoName)
    {
        $this->ChronoName = $ChronoName;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCampagne()
    {
        return $this->IdCampagne;
    }

    /**
     * @param int $IdCampagne
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateChrono
     */
    public function setIdCampagne($IdCampagne)
    {
        $this->IdCampagne = $IdCampagne;
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
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateChrono
     */
    public function setIdTemplate($IdTemplate)
    {
        $this->IdTemplate = $IdTemplate;
        return $this;
    }
}
