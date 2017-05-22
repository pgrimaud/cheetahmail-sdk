<?php
namespace Cheetahmail\Campaigns\BodyManager;

class CataDetails
{

    /**
     * @var int $idCata
     */
    protected $idCata = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @param int $idCata
     * @param boolean $active
     */
    public function __construct($idCata, $active)
    {
        $this->idCata = $idCata;
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getIdCata()
    {
        return $this->idCata;
    }

    /**
     * @param int $idCata
     * @return \Cheetahmail\Campaigns\BodyManager\CataDetails
     */
    public function setIdCata($idCata)
    {
        $this->idCata = $idCata;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \Cheetahmail\Campaigns\BodyManager\CataDetails
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @return \Cheetahmail\Campaigns\BodyManager\CataDetails
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}
