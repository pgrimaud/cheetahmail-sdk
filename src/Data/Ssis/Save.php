<?php
namespace Cheetahmail\Data\Ssis;

class Save
{

    /**
     * @var int $mappingId
     */
    protected $mappingId = null;

    /**
     * @param int $mappingId
     */
    public function __construct($mappingId)
    {
        $this->mappingId = $mappingId;
    }

    /**
     * @return int
     */
    public function getMappingId()
    {
        return $this->mappingId;
    }

    /**
     * @param int $mappingId
     * @return \Cheetahmail\Data\Ssis\Save
     */
    public function setMappingId($mappingId)
    {
        $this->mappingId = $mappingId;
        return $this;
    }
}
