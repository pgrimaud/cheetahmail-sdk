<?php

namespace Cheetahmail\Campaigns;

class UpdateSentResponse
{

    /**
     * @var boolean $UpdateSentResult
     */
    protected $UpdateSentResult = null;

    /**
     * @param boolean $UpdateSentResult
     */
    public function __construct($UpdateSentResult)
    {
      $this->UpdateSentResult = $UpdateSentResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSentResult()
    {
      return $this->UpdateSentResult;
    }

    /**
     * @param boolean $UpdateSentResult
     * @return \Cheetahmail\Campaigns\UpdateSentResponse
     */
    public function setUpdateSentResult($UpdateSentResult)
    {
      $this->UpdateSentResult = $UpdateSentResult;
      return $this;
    }

}
