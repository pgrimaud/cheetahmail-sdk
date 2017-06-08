<?php
namespace Cheetahmail\Data\Ssis;

class UpdateInfoMapping
{

    /**
     * @var int $IdMapping
     */
    protected $IdMapping = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $IdGroup
     */
    protected $IdGroup = null;

    /**
     * @param int $IdMapping
     * @param string $FileName
     * @param string $Name
     * @param string $Description
     * @param int $IdGroup
     */
    public function __construct($IdMapping, $FileName, $Name, $Description, $IdGroup)
    {
        $this->IdMapping = $IdMapping;
        $this->FileName = $FileName;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->IdGroup = $IdGroup;
    }

    /**
     * @return int
     */
    public function getIdMapping()
    {
        return $this->IdMapping;
    }

    /**
     * @param int $IdMapping
     * @return \Cheetahmail\Data\Ssis\UpdateInfoMapping
     */
    public function setIdMapping($IdMapping)
    {
        $this->IdMapping = $IdMapping;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Cheetahmail\Data\Ssis\UpdateInfoMapping
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
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
     * @return \Cheetahmail\Data\Ssis\UpdateInfoMapping
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
     * @return \Cheetahmail\Data\Ssis\UpdateInfoMapping
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdGroup()
    {
        return $this->IdGroup;
    }

    /**
     * @param int $IdGroup
     * @return \Cheetahmail\Data\Ssis\UpdateInfoMapping
     */
    public function setIdGroup($IdGroup)
    {
        $this->IdGroup = $IdGroup;
        return $this;
    }
}
