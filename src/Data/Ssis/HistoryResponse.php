<?php
namespace Cheetahmail\Data\Ssis;

class HistoryResponse
{

    /**
     * @var ArrayOfHistoryDesc $HistoryResult
     */
    protected $HistoryResult = null;

    /**
     * @param ArrayOfHistoryDesc $HistoryResult
     */
    public function __construct($HistoryResult)
    {
        $this->HistoryResult = $HistoryResult;
    }

    /**
     * @return ArrayOfHistoryDesc
     */
    public function getHistoryResult()
    {
        return $this->HistoryResult;
    }

    /**
     * @param ArrayOfHistoryDesc $HistoryResult
     * @return \Cheetahmail\Data\Ssis\HistoryResponse
     */
    public function setHistoryResult($HistoryResult)
    {
        $this->HistoryResult = $HistoryResult;
        return $this;
    }
}
