<?php
namespace Cheetahmail\Data\Ssis;

class CreateImportMappingResponse
{

    /**
     * @var int $CreateImportMappingResult
     */
    protected $CreateImportMappingResult = null;

    /**
     * @param int $CreateImportMappingResult
     */
    public function __construct($CreateImportMappingResult)
    {
        $this->CreateImportMappingResult = $CreateImportMappingResult;
    }

    /**
     * @return int
     */
    public function getCreateImportMappingResult()
    {
        return $this->CreateImportMappingResult;
    }

    /**
     * @param int $CreateImportMappingResult
     * @return \Cheetahmail\Data\Ssis\CreateImportMappingResponse
     */
    public function setCreateImportMappingResult($CreateImportMappingResult)
    {
        $this->CreateImportMappingResult = $CreateImportMappingResult;
        return $this;
    }
}
