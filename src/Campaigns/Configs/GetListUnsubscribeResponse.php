<?php
namespace Cheetahmail\Campaigns\Configs;

class GetListUnsubscribeResponse
{

    /**
     * @var ListUnsubscribe $GetListUnsubscribeResult
     */
    protected $GetListUnsubscribeResult = null;

    /**
     * @param ListUnsubscribe $GetListUnsubscribeResult
     */
    public function __construct($GetListUnsubscribeResult)
    {
        $this->GetListUnsubscribeResult = $GetListUnsubscribeResult;
    }

    /**
     * @return ListUnsubscribe
     */
    public function getGetListUnsubscribeResult()
    {
        return $this->GetListUnsubscribeResult;
    }

    /**
     * @param ListUnsubscribe $GetListUnsubscribeResult
     * @return \Cheetahmail\Campaigns\Configs\GetListUnsubscribeResponse
     */
    public function setGetListUnsubscribeResult($GetListUnsubscribeResult)
    {
        $this->GetListUnsubscribeResult = $GetListUnsubscribeResult;
        return $this;
    }
}
