<?php
namespace Cheetahmail\Campaigns;

class DetailsCamp
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $dateCreation
     */
    protected $dateCreation = null;

    /**
     * @var string $dateModification
     */
    protected $dateModification = null;

    /**
     * @var string $dateFin
     */
    protected $dateFin = null;

    /**
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Cheetahmail\Campaigns\DetailsCamp
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \Cheetahmail\Campaigns\DetailsCamp
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \Cheetahmail\Campaigns\DetailsCamp
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param string $dateCreation
     * @return \Cheetahmail\Campaigns\DetailsCamp
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * @param string $dateModification
     * @return \Cheetahmail\Campaigns\DetailsCamp
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param string $dateFin
     * @return \Cheetahmail\Campaigns\DetailsCamp
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
        return $this;
    }
}
