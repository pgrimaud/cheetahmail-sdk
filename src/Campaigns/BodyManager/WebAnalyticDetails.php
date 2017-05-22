<?php
namespace Cheetahmail\Campaigns\BodyManager;

class WebAnalyticDetails
{

    /**
     * @var int $IdWA
     */
    protected $IdWA = null;

    /**
     * @var string $Libelle
     */
    protected $Libelle = null;

    /**
     * @param int $IdWA
     */
    public function __construct($IdWA)
    {
        $this->IdWA = $IdWA;
    }

    /**
     * @return int
     */
    public function getIdWA()
    {
        return $this->IdWA;
    }

    /**
     * @param int $IdWA
     * @return \Cheetahmail\Campaigns\BodyManager\WebAnalyticDetails
     */
    public function setIdWA($IdWA)
    {
        $this->IdWA = $IdWA;
        return $this;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return \Cheetahmail\Campaigns\BodyManager\WebAnalyticDetails
     */
    public function setLibelle($Libelle)
    {
        $this->Libelle = $Libelle;
        return $this;
    }
}
