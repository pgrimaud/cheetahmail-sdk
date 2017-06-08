<?php
namespace Cheetahmail\Data\Ssis;

class MappingDesc
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var MappingType $Type
     */
    protected $Type = null;

    /**
     * @var int $IdNotifyGroup
     */
    protected $IdNotifyGroup = null;

    /**
     * @var string $Lang
     */
    protected $Lang = null;

    /**
     * @var boolean $ImportMassif
     */
    protected $ImportMassif = null;

    /**
     * @param int $Id
     * @param MappingType $Type
     * @param int $IdNotifyGroup
     * @param boolean $ImportMassif
     */
    public function __construct($Id, $Type, $IdNotifyGroup, $ImportMassif)
    {
        $this->Id = $Id;
        $this->Type = $Type;
        $this->IdNotifyGroup = $IdNotifyGroup;
        $this->ImportMassif = $ImportMassif;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Cheetahmail\Data\Ssis\MappingDesc
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
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
     * @return \Cheetahmail\Data\Ssis\MappingDesc
     */
    public function setName($Name)
    {
        $this->Name = $Name;
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
     * @return \Cheetahmail\Data\Ssis\MappingDesc
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \Cheetahmail\Data\Ssis\MappingDesc
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdNotifyGroup()
    {
        return $this->IdNotifyGroup;
    }

    /**
     * @param int $IdNotifyGroup
     * @return \Cheetahmail\Data\Ssis\MappingDesc
     */
    public function setIdNotifyGroup($IdNotifyGroup)
    {
        $this->IdNotifyGroup = $IdNotifyGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->Lang;
    }

    /**
     * @param string $Lang
     * @return \Cheetahmail\Data\Ssis\MappingDesc
     */
    public function setLang($Lang)
    {
        $this->Lang = $Lang;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getImportMassif()
    {
        return $this->ImportMassif;
    }

    /**
     * @param boolean $ImportMassif
     * @return \Cheetahmail\Data\Ssis\MappingDesc
     */
    public function setImportMassif($ImportMassif)
    {
        $this->ImportMassif = $ImportMassif;
        return $this;
    }
}
