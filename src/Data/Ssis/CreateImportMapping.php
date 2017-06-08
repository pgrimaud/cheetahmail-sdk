<?php
namespace Cheetahmail\Data\Ssis;

class CreateImportMapping
{

    /**
     * @var MappingDesc $mappingdesc
     */
    protected $mappingdesc = null;

    /**
     * @var MappingFile $mappingfile
     */
    protected $mappingfile = null;

    /**
     * @param MappingDesc $mappingdesc
     * @param MappingFile $mappingfile
     */
    public function __construct($mappingdesc, $mappingfile)
    {
        $this->mappingdesc = $mappingdesc;
        $this->mappingfile = $mappingfile;
    }

    /**
     * @return MappingDesc
     */
    public function getMappingdesc()
    {
        return $this->mappingdesc;
    }

    /**
     * @param MappingDesc $mappingdesc
     * @return \Cheetahmail\Data\Ssis\CreateImportMapping
     */
    public function setMappingdesc($mappingdesc)
    {
        $this->mappingdesc = $mappingdesc;
        return $this;
    }

    /**
     * @return MappingFile
     */
    public function getMappingfile()
    {
        return $this->mappingfile;
    }

    /**
     * @param MappingFile $mappingfile
     * @return \Cheetahmail\Data\Ssis\CreateImportMapping
     */
    public function setMappingfile($mappingfile)
    {
        $this->mappingfile = $mappingfile;
        return $this;
    }
}
