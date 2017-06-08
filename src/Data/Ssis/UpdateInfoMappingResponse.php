<?php
namespace Cheetahmail\Data\Ssis;

class UpdateInfoMappingResponse
{

    /**
     * @var boolean $UpdateInfoMappingResult
     */
    protected $UpdateInfoMappingResult = null;

    /**
     * @param boolean $UpdateInfoMappingResult
     */
    public function __construct($UpdateInfoMappingResult)
    {
        $this->UpdateInfoMappingResult = $UpdateInfoMappingResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateInfoMappingResult()
    {
        return $this->UpdateInfoMappingResult;
    }

    /**
     * @param boolean $UpdateInfoMappingResult
     * @return \Cheetahmail\Data\Ssis\UpdateInfoMappingResponse
     */
    public function setUpdateInfoMappingResult($UpdateInfoMappingResult)
    {
        $this->UpdateInfoMappingResult = $UpdateInfoMappingResult;
        return $this;
    }
}
