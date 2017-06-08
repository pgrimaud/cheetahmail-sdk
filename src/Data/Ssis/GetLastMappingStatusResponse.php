<?php
namespace Cheetahmail\Data\Ssis;

class GetLastMappingStatusResponse
{

    /**
     * @var EnumStepStatus $GetLastMappingStatusResult
     */
    protected $GetLastMappingStatusResult = null;

    /**
     * @param EnumStepStatus $GetLastMappingStatusResult
     */
    public function __construct($GetLastMappingStatusResult)
    {
        $this->GetLastMappingStatusResult = $GetLastMappingStatusResult;
    }

    /**
     * @return EnumStepStatus
     */
    public function getGetLastMappingStatusResult()
    {
        return $this->GetLastMappingStatusResult;
    }

    /**
     * @param EnumStepStatus $GetLastMappingStatusResult
     * @return \Cheetahmail\Data\Ssis\GetLastMappingStatusResponse
     */
    public function setGetLastMappingStatusResult($GetLastMappingStatusResult)
    {
        $this->GetLastMappingStatusResult = $GetLastMappingStatusResult;
        return $this;
    }
}
