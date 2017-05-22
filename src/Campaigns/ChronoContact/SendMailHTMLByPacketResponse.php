<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class SendMailHTMLByPacketResponse
{

    /**
     * @var boolean $SendMailHTMLByPacketResult
     */
    protected $SendMailHTMLByPacketResult = null;

    /**
     * @param boolean $SendMailHTMLByPacketResult
     */
    public function __construct($SendMailHTMLByPacketResult)
    {
        $this->SendMailHTMLByPacketResult = $SendMailHTMLByPacketResult;
    }

    /**
     * @return boolean
     */
    public function getSendMailHTMLByPacketResult()
    {
        return $this->SendMailHTMLByPacketResult;
    }

    /**
     * @param boolean $SendMailHTMLByPacketResult
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTMLByPacketResponse
     */
    public function setSendMailHTMLByPacketResult($SendMailHTMLByPacketResult)
    {
        $this->SendMailHTMLByPacketResult = $SendMailHTMLByPacketResult;
        return $this;
    }
}
