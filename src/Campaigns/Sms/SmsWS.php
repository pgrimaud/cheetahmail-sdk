<?php
namespace Cheetahmail\Campaigns\Sms;

class SmsWS
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $IdQuery
     */
    protected $IdQuery = null;

    /**
     * @var int $IdQuerySql
     */
    protected $IdQuerySql = null;

    /**
     * @var boolean $IsUnicode
     */
    protected $IsUnicode = null;

    /**
     * @var int $Mobile
     */
    protected $Mobile = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param int $IdQuery
     * @param int $IdQuerySql
     * @param boolean $IsUnicode
     * @param int $Mobile
     */
    public function __construct($IdQuery, $IdQuerySql, $IsUnicode, $Mobile)
    {
        $this->IdQuery = $IdQuery;
        $this->IdQuerySql = $IdQuerySql;
        $this->IsUnicode = $IsUnicode;
        $this->Mobile = $Mobile;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Cheetahmail\Campaigns\Sms\SmsWS
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdQuery()
    {
        return $this->IdQuery;
    }

    /**
     * @param int $IdQuery
     * @return \Cheetahmail\Campaigns\Sms\SmsWS
     */
    public function setIdQuery($IdQuery)
    {
        $this->IdQuery = $IdQuery;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdQuerySql()
    {
        return $this->IdQuerySql;
    }

    /**
     * @param int $IdQuerySql
     * @return \Cheetahmail\Campaigns\Sms\SmsWS
     */
    public function setIdQuerySql($IdQuerySql)
    {
        $this->IdQuerySql = $IdQuerySql;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUnicode()
    {
        return $this->IsUnicode;
    }

    /**
     * @param boolean $IsUnicode
     * @return \Cheetahmail\Campaigns\Sms\SmsWS
     */
    public function setIsUnicode($IsUnicode)
    {
        $this->IsUnicode = $IsUnicode;
        return $this;
    }

    /**
     * @return int
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * @param int $Mobile
     * @return \Cheetahmail\Campaigns\Sms\SmsWS
     */
    public function setMobile($Mobile)
    {
        $this->Mobile = $Mobile;
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
     * @return \Cheetahmail\Campaigns\Sms\SmsWS
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
