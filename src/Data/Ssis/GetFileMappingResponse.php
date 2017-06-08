<?php
namespace Cheetahmail\Data\Ssis;

class GetFileMappingResponse
{

    /**
     * @var MappingFile $GetFileMappingResult
     */
    protected $GetFileMappingResult = null;

    /**
     * @param MappingFile $GetFileMappingResult
     */
    public function __construct($GetFileMappingResult)
    {
        $this->GetFileMappingResult = $GetFileMappingResult;
    }

    /**
     * @return MappingFile
     */
    public function getGetFileMappingResult()
    {
        return $this->GetFileMappingResult;
    }

    /**
     * @param MappingFile $GetFileMappingResult
     * @return \Cheetahmail\Data\Ssis\GetFileMappingResponse
     */
    public function setGetFileMappingResult($GetFileMappingResult)
    {
        $this->GetFileMappingResult = $GetFileMappingResult;
        return $this;
    }
}
