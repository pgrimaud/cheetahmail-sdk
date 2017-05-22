<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class SendMailResponse
{

    /**
     * @var boolean $SendMailResult
     */
    protected $SendMailResult = null;

    /**
     * @param boolean $SendMailResult
     */
    public function __construct($SendMailResult)
    {
        $this->SendMailResult = $SendMailResult;
    }

    /**
     * @return boolean
     */
    public function getSendMailResult()
    {
        return $this->SendMailResult;
    }

    /**
     * @param boolean $SendMailResult
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailResponse
     */
    public function setSendMailResult($SendMailResult)
    {
        $this->SendMailResult = $SendMailResult;
        return $this;
    }
}
