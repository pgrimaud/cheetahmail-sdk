<?php

namespace Cheetahmail\Campaigns;

class DuplicateSentResponse
{

    /**
     * @var int $DuplicateSentResult
     */
    protected $DuplicateSentResult = null;

    /**
     * @param int $DuplicateSentResult
     */
    public function __construct($DuplicateSentResult)
    {
      $this->DuplicateSentResult = $DuplicateSentResult;
    }

    /**
     * @return int
     */
    public function getDuplicateSentResult()
    {
      return $this->DuplicateSentResult;
    }

    /**
     * @param int $DuplicateSentResult
     * @return \Cheetahmail\Campaigns\DuplicateSentResponse
     */
    public function setDuplicateSentResult($DuplicateSentResult)
    {
      $this->DuplicateSentResult = $DuplicateSentResult;
      return $this;
    }

}
