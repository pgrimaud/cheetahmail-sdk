<?php
namespace Cheetahmail\Campaigns;

class DeleteSentResponse
{

    /**
     * @var boolean $DeleteSentResult
     */
    protected $DeleteSentResult = null;

    /**
     * @param boolean $DeleteSentResult
     */
    public function __construct($DeleteSentResult)
    {
      $this->DeleteSentResult = $DeleteSentResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteSentResult()
    {
      return $this->DeleteSentResult;
    }

    /**
     * @param boolean $DeleteSentResult
     * @return \Cheetahmail\Campaigns\DeleteSentResponse
     */
    public function setDeleteSentResult($DeleteSentResult)
    {
      $this->DeleteSentResult = $DeleteSentResult;
      return $this;
    }

}
