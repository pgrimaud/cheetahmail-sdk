<?php

namespace Cheetahmail\ChronoContact;

class SendMailByPacketResponse
{

    /**
     * @var boolean $SendMailByPacketResult
     */
    protected $SendMailByPacketResult = null;

    /**
     * @param boolean $SendMailByPacketResult
     */
    public function __construct($SendMailByPacketResult)
    {
        $this->SendMailByPacketResult = $SendMailByPacketResult;
    }

    /**
     * @return boolean
     */
    public function getSendMailByPacketResult()
    {
        return $this->SendMailByPacketResult;
    }

    /**
     * @param boolean $SendMailByPacketResult
     * @return \Cheetahmail\ChronoContact\SendMailByPacketResponse
     */
    public function setSendMailByPacketResult($SendMailByPacketResult)
    {
        $this->SendMailByPacketResult = $SendMailByPacketResult;
        return $this;
    }
}
