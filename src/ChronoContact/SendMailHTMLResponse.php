<?php

namespace Cheetahmail\ChronoContact;

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
     * @return \Cheetahmail\ChronoContact\SendMailHTMLResponse
     */
    public function setSendMailHTMLResult($SendMailHTMLResult)
    {
        $this->SendMailHTMLResult = $SendMailHTMLResult;
        return $this;
    }
}
