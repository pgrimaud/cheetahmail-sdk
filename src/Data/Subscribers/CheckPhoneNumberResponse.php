<?php
namespace Cheetahmail\Data\Subscribers;

class CheckPhoneNumberResponse
{

    /**
     * @var boolean $CheckPhoneNumberResult
     */
    protected $CheckPhoneNumberResult = null;

    /**
     * @param boolean $CheckPhoneNumberResult
     */
    public function __construct($CheckPhoneNumberResult)
    {
        $this->CheckPhoneNumberResult = $CheckPhoneNumberResult;
    }

    /**
     * @return boolean
     */
    public function getCheckPhoneNumberResult()
    {
        return $this->CheckPhoneNumberResult;
    }

    /**
     * @param boolean $CheckPhoneNumberResult
     * @return \Cheetahmail\Data\Subscribers\CheckPhoneNumberResponse
     */
    public function setCheckPhoneNumberResult($CheckPhoneNumberResult)
    {
        $this->CheckPhoneNumberResult = $CheckPhoneNumberResult;
        return $this;
    }
}
