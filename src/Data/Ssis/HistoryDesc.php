<?php
namespace Cheetahmail\Data\Ssis;

class HistoryDesc
{

    /**
     * @var int $IdMap
     */
    protected $IdMap = null;

    /**
     * @var string $Nom
     */
    protected $Nom = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var MappingType $Type
     */
    protected $Type = null;

    /**
     * @var int $LineToInsert
     */
    protected $LineToInsert = null;

    /**
     * @var int $LineToUpdate
     */
    protected $LineToUpdate = null;

    /**
     * @var int $LineInserted
     */
    protected $LineInserted = null;

    /**
     * @var int $LineUpdated
     */
    protected $LineUpdated = null;

    /**
     * @var int $LineOnError
     */
    protected $LineOnError = null;

    /**
     * @var EnumStatut $Statut
     */
    protected $Statut = null;

    /**
     * @param int $IdMap
     * @param \DateTime $Date
     * @param MappingType $Type
     * @param int $LineToInsert
     * @param int $LineToUpdate
     * @param int $LineInserted
     * @param int $LineUpdated
     * @param int $LineOnError
     * @param EnumStatut $Statut
     */
    public function __construct($IdMap, \DateTime $Date, $Type, $LineToInsert, $LineToUpdate, $LineInserted, $LineUpdated, $LineOnError, $Statut)
    {
        $this->IdMap = $IdMap;
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->Type = $Type;
        $this->LineToInsert = $LineToInsert;
        $this->LineToUpdate = $LineToUpdate;
        $this->LineInserted = $LineInserted;
        $this->LineUpdated = $LineUpdated;
        $this->LineOnError = $LineOnError;
        $this->Statut = $Statut;
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
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setIdMap($IdMap)
    {
        $this->IdMap = $IdMap;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return MappingType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param MappingType $Type
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineToInsert()
    {
        return $this->LineToInsert;
    }

    /**
     * @param int $LineToInsert
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setLineToInsert($LineToInsert)
    {
        $this->LineToInsert = $LineToInsert;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineToUpdate()
    {
        return $this->LineToUpdate;
    }

    /**
     * @param int $LineToUpdate
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setLineToUpdate($LineToUpdate)
    {
        $this->LineToUpdate = $LineToUpdate;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineInserted()
    {
        return $this->LineInserted;
    }

    /**
     * @param int $LineInserted
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setLineInserted($LineInserted)
    {
        $this->LineInserted = $LineInserted;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineUpdated()
    {
        return $this->LineUpdated;
    }

    /**
     * @param int $LineUpdated
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setLineUpdated($LineUpdated)
    {
        $this->LineUpdated = $LineUpdated;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineOnError()
    {
        return $this->LineOnError;
    }

    /**
     * @param int $LineOnError
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setLineOnError($LineOnError)
    {
        $this->LineOnError = $LineOnError;
        return $this;
    }

    /**
     * @return EnumStatut
     */
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * @param EnumStatut $Statut
     * @return \Cheetahmail\Data\Ssis\HistoryDesc
     */
    public function setStatut($Statut)
    {
        $this->Statut = $Statut;
        return $this;
    }
}
