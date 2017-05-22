<?php

namespace Cheetahmail\Campaigns\BodyManager;

class GetListLinkResponse
{

    /**
     * @var ArrayOfRelayDetails $GetListLinkResult
     */
    protected $GetListLinkResult = null;

    /**
     * @param ArrayOfRelayDetails $GetListLinkResult
     */
    public function __construct($GetListLinkResult)
    {
      $this->GetListLinkResult = $GetListLinkResult;
    }

    /**
     * @return ArrayOfRelayDetails
     */
    public function getGetListLinkResult()
    {
      return $this->GetListLinkResult;
    }

    /**
     * @param ArrayOfRelayDetails $GetListLinkResult
     * @return \Cheetahmail\Campaigns\BodyManager\GetListLinkResponse
     */
    public function setGetListLinkResult($GetListLinkResult)
    {
      $this->GetListLinkResult = $GetListLinkResult;
      return $this;
    }

}
