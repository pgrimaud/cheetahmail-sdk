<?php
namespace Cheetahmail\Data\Segment;

class GetImportStatusResponse
{

    /**
     * @var string $GetImportStatusResult
     */
    protected $GetImportStatusResult = null;

    /**
     * @param string $GetImportStatusResult
     */
    public function __construct($GetImportStatusResult)
    {
        $this->GetImportStatusResult = $GetImportStatusResult;
    }

    /**
     * @return string
     */
    public function getGetImportStatusResult()
    {
        return $this->GetImportStatusResult;
    }

    /**
     * @param string $GetImportStatusResult
     * @return \Cheetahmail\Data\Segment\GetImportStatusResponse
     */
    public function setGetImportStatusResult($GetImportStatusResult)
    {
        $this->GetImportStatusResult = $GetImportStatusResult;
        return $this;
    }
}
