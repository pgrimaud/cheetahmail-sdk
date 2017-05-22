<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class ModifyChrono
{

    /**
     * @var int $idChrono
     */
    protected $idChrono = null;

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
     * @param int $idChrono
     * @param string $ChronoName
     * @param int $IdCampagne
     * @param int $IdTemplate
     */
    public function __construct($idChrono, $ChronoName, $IdCampagne, $IdTemplate)
    {
        $this->idChrono = $idChrono;
        $this->ChronoName = $ChronoName;
        $this->IdCampagne = $IdCampagne;
        $this->IdTemplate = $IdTemplate;
    }

    /**
     * @return int
     */
    public function getIdChrono()
    {
        return $this->idChrono;
    }

    /**
     * @param int $idChrono
     * @return \Cheetahmail\Campaigns\ChronoContact\ModifyChrono
     */
    public function setIdChrono($idChrono)
    {
        $this->idChrono = $idChrono;
        return $this;
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
     * @return \Cheetahmail\Campaigns\ChronoContact\ModifyChrono
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
     * @return \Cheetahmail\Campaigns\ChronoContact\ModifyChrono
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
     * @return \Cheetahmail\Campaigns\ChronoContact\ModifyChrono
     */
    public function setIdTemplate($IdTemplate)
    {
        $this->IdTemplate = $IdTemplate;
        return $this;
    }
}
