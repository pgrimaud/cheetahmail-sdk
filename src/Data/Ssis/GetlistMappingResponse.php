<?php
namespace Cheetahmail\Data\Ssis;

class GetlistMappingResponse
{

    /**
     * @var ArrayOfMappingDesc $GetlistMappingResult
     */
    protected $GetlistMappingResult = null;

    /**
     * @param ArrayOfMappingDesc $GetlistMappingResult
     */
    public function __construct($GetlistMappingResult)
    {
        $this->GetlistMappingResult = $GetlistMappingResult;
    }

    /**
     * @return ArrayOfMappingDesc
     */
    public function getGetlistMappingResult()
    {
        return $this->GetlistMappingResult;
    }

    /**
     * @param ArrayOfMappingDesc $GetlistMappingResult
     * @return \Cheetahmail\Data\Ssis\GetlistMappingResponse
     */
    public function setGetlistMappingResult($GetlistMappingResult)
    {
        $this->GetlistMappingResult = $GetlistMappingResult;
        return $this;
    }
}
