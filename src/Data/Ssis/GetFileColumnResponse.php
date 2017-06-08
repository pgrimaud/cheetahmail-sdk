<?php
namespace Cheetahmail\Data\Ssis;

class GetFileColumnResponse
{

    /**
     * @var ArrayOfString $GetFileColumnResult
     */
    protected $GetFileColumnResult = null;

    /**
     * @param ArrayOfString $GetFileColumnResult
     */
    public function __construct($GetFileColumnResult)
    {
        $this->GetFileColumnResult = $GetFileColumnResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetFileColumnResult()
    {
        return $this->GetFileColumnResult;
    }

    /**
     * @param ArrayOfString $GetFileColumnResult
     * @return \Cheetahmail\Data\Ssis\GetFileColumnResponse
     */
    public function setGetFileColumnResult($GetFileColumnResult)
    {
        $this->GetFileColumnResult = $GetFileColumnResult;
        return $this;
    }
}
