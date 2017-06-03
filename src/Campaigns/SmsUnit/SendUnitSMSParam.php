<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class SendUnitSMSParam
{

    /**
     * @var int $IdSmsUnit
     */
    protected $IdSmsUnit = null;

    /**
     * @var int $IdUser
     */
    protected $IdUser = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param int $IdSmsUnit
     * @param int $IdUser
     */
    public function __construct($IdSmsUnit, $IdUser)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        $this->IdUser = $IdUser;
    }

    /**
     * @return int
     */
    public function getIdSmsUnit()
    {
        return $this->IdSmsUnit;
    }

    /**
     * @param int $IdSmsUnit
     * @return \Cheetahmail\Campaigns\SmsUnit\SendUnitSMSParam
     */
    public function setIdSmsUnit($IdSmsUnit)
    {
        $this->IdSmsUnit = $IdSmsUnit;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->IdUser;
    }

    /**
     * @param int $IdUser
     * @return \Cheetahmail\Campaigns\SmsUnit\SendUnitSMSParam
     */
    public function setIdUser($IdUser)
    {
        $this->IdUser = $IdUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Cheetahmail\Campaigns\SmsUnit\SendUnitSMSParam
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
