<?php
namespace Cheetahmail\Campaigns;

class GetSourceByIdSentResponse
{

    /**
     * @var SourceDetails $GetSourceByIdSentResult
     */
    protected $GetSourceByIdSentResult = null;

    /**
     * @param SourceDetails $GetSourceByIdSentResult
     */
    public function __construct($GetSourceByIdSentResult)
    {
      $this->GetSourceByIdSentResult = $GetSourceByIdSentResult;
    }

    /**
     * @return SourceDetails
     */
    public function getGetSourceByIdSentResult()
    {
      return $this->GetSourceByIdSentResult;
    }

    /**
     * @param SourceDetails $GetSourceByIdSentResult
     * @return \Cheetahmail\Campaigns\GetSourceByIdSentResponse
     */
    public function setGetSourceByIdSentResult($GetSourceByIdSentResult)
    {
      $this->GetSourceByIdSentResult = $GetSourceByIdSentResult;
      return $this;
    }

}
