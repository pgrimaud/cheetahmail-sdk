<?php
namespace Cheetahmail\Data\Ssis;

class GetMappingDescResponse
{

    /**
     * @var MappingDesc $GetMappingDescResult
     */
    protected $GetMappingDescResult = null;

    /**
     * @param MappingDesc $GetMappingDescResult
     */
    public function __construct($GetMappingDescResult)
    {
        $this->GetMappingDescResult = $GetMappingDescResult;
    }

    /**
     * @return MappingDesc
     */
    public function getGetMappingDescResult()
    {
        return $this->GetMappingDescResult;
    }

    /**
     * @param MappingDesc $GetMappingDescResult
     * @return \Cheetahmail\Data\Ssis\GetMappingDescResponse
     */
    public function setGetMappingDescResult($GetMappingDescResult)
    {
        $this->GetMappingDescResult = $GetMappingDescResult;
        return $this;
    }
}
