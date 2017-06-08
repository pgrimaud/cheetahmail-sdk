<?php
namespace Cheetahmail\Data\Ssis;

class DropMappingResponse
{

    /**
     * @var boolean $DropMappingResult
     */
    protected $DropMappingResult = null;

    /**
     * @param boolean $DropMappingResult
     */
    public function __construct($DropMappingResult)
    {
        $this->DropMappingResult = $DropMappingResult;
    }

    /**
     * @return boolean
     */
    public function getDropMappingResult()
    {
        return $this->DropMappingResult;
    }

    /**
     * @param boolean $DropMappingResult
     * @return \Cheetahmail\Data\Ssis\DropMappingResponse
     */
    public function setDropMappingResult($DropMappingResult)
    {
        $this->DropMappingResult = $DropMappingResult;
        return $this;
    }
}
