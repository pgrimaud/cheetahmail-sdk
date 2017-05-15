<?php

namespace Cheetahmail\Campaigns;

class AddSentResponse
{

    /**
     * @var int $AddSentResult
     */
    protected $AddSentResult = null;

    /**
     * @param int $AddSentResult
     */
    public function __construct($AddSentResult)
    {
      $this->AddSentResult = $AddSentResult;
    }

    /**
     * @return int
     */
    public function getAddSentResult()
    {
      return $this->AddSentResult;
    }

    /**
     * @param int $AddSentResult
     * @return \Cheetahmail\Campaigns\AddSentResponse
     */
    public function setAddSentResult($AddSentResult)
    {
      $this->AddSentResult = $AddSentResult;
      return $this;
    }

}
