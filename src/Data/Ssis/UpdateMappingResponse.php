<?php
namespace Cheetahmail\Data\Ssis;

class UpdateMappingResponse
{

    /**
     * @var boolean $UpdateMappingResult
     */
    protected $UpdateMappingResult = null;

    /**
     * @param boolean $UpdateMappingResult
     */
    public function __construct($UpdateMappingResult)
    {
        $this->UpdateMappingResult = $UpdateMappingResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateMappingResult()
    {
        return $this->UpdateMappingResult;
    }

    /**
     * @param boolean $UpdateMappingResult
     * @return \Cheetahmail\Data\Ssis\UpdateMappingResponse
     */
    public function setUpdateMappingResult($UpdateMappingResult)
    {
        $this->UpdateMappingResult = $UpdateMappingResult;
        return $this;
    }
}
