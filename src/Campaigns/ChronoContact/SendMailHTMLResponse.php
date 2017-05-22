<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class SendMailHTMLResponse
{

    /**
     * @var boolean $SendMailHTMLResult
     */
    protected $SendMailHTMLResult = null;

    /**
     * @param boolean $SendMailHTMLResult
     */
    public function __construct($SendMailHTMLResult)
    {
        $this->SendMailHTMLResult = $SendMailHTMLResult;
    }

    /**
     * @return boolean
     */
    public function getSendMailHTMLResult()
    {
        return $this->SendMailHTMLResult;
    }

    /**
     * @param boolean $SendMailHTMLResult
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTMLResponse
     */
    public function setSendMailHTMLResult($SendMailHTMLResult)
    {
        $this->SendMailHTMLResult = $SendMailHTMLResult;
        return $this;
    }
}
