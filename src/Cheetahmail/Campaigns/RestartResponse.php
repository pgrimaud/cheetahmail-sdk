<?php
namespace Cheetahmail\Campaigns;

class RestartResponse
{

    /**
     * @var boolean $RestartResult
     */
    protected $RestartResult = null;

    /**
     * @param boolean $RestartResult
     */
    public function __construct($RestartResult)
    {
      $this->RestartResult = $RestartResult;
    }

    /**
     * @return boolean
     */
    public function getRestartResult()
    {
      return $this->RestartResult;
    }

    /**
     * @param boolean $RestartResult
     * @return \Cheetahmail\Campaigns\RestartResponse
     */
    public function setRestartResult($RestartResult)
    {
      $this->RestartResult = $RestartResult;
      return $this;
    }

}
