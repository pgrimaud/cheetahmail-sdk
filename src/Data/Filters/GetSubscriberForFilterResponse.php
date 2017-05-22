<?php
namespace Cheetahmail\Data\Filters;

class GetSubscriberForFilterResponse
{

    /**
     * @var ArrayOfArrayOfArrayOfString $GetSubscriberForFilterResult
     */
    protected $GetSubscriberForFilterResult = null;

    /**
     * @param ArrayOfArrayOfArrayOfString $GetSubscriberForFilterResult
     */
    public function __construct($GetSubscriberForFilterResult)
    {
        $this->GetSubscriberForFilterResult = $GetSubscriberForFilterResult;
    }

    /**
     * @return ArrayOfArrayOfArrayOfString
     */
    public function getGetSubscriberForFilterResult()
    {
        return $this->GetSubscriberForFilterResult;
    }

    /**
     * @param ArrayOfArrayOfArrayOfString $GetSubscriberForFilterResult
     * @return \Cheetahmail\Data\Filters\GetSubscriberForFilterResponse
     */
    public function setGetSubscriberForFilterResult($GetSubscriberForFilterResult)
    {
        $this->GetSubscriberForFilterResult = $GetSubscriberForFilterResult;
        return $this;
    }
}
