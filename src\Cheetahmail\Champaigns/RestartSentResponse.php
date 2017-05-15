<?php

namespace Cheetahmail\Campaigns;

class RestartSentResponse
{

    /**
     * @var boolean $RestartSentResult
     */
    protected $RestartSentResult = null;

    /**
     * @param boolean $RestartSentResult
     */
    public function __construct($RestartSentResult)
    {
      $this->RestartSentResult = $RestartSentResult;
    }

    /**
     * @return boolean
     */
    public function getRestartSentResult()
    {
      return $this->RestartSentResult;
    }

    /**
     * @param boolean $RestartSentResult
     * @return \Cheetahmail\Campaigns\RestartSentResponse
     */
    public function setRestartSentResult($RestartSentResult)
    {
      $this->RestartSentResult = $RestartSentResult;
      return $this;
    }

}
