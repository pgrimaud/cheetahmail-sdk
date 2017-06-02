<?php
namespace Cheetahmail\Campaigns\Sms;

class CreateSMSCampaignParams
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
     * @var int $Mobile
     */
    protected $Mobile = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var boolean $IsPrivate
     */
    protected $IsPrivate = null;

    /**
     * @var boolean $IsUnicode
     */
    protected $IsUnicode = null;

    /**
     * @param int $IdQuery
     * @param int $IdQuerySql
     * @param int $Mobile
     * @param boolean $IsPrivate
     * @param boolean $IsUnicode
     */
    public function __construct($IdQuery, $IdQuerySql, $Mobile, $IsPrivate, $IsUnicode)
    {
        $this->IdQuery = $IdQuery;
        $this->IdQuerySql = $IdQuerySql;
        $this->Mobile = $Mobile;
        $this->IsPrivate = $IsPrivate;
        $this->IsUnicode = $IsUnicode;
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
     * @return \Cheetahmail\Campaigns\Sms\CreateSMSCampaignParams
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
     * @return \Cheetahmail\Campaigns\Sms\CreateSMSCampaignParams
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
     * @return \Cheetahmail\Campaigns\Sms\CreateSMSCampaignParams
     */
    public function setIdQuerySql($IdQuerySql)
    {
        $this->IdQuerySql = $IdQuerySql;
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
     * @return \Cheetahmail\Campaigns\Sms\CreateSMSCampaignParams
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
     * @return \Cheetahmail\Campaigns\Sms\CreateSMSCampaignParams
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
        return $this->IsPrivate;
    }

    /**
     * @param boolean $IsPrivate
     * @return \Cheetahmail\Campaigns\Sms\CreateSMSCampaignParams
     */
    public function setIsPrivate($IsPrivate)
    {
        $this->IsPrivate = $IsPrivate;
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
     * @return \Cheetahmail\Campaigns\Sms\CreateSMSCampaignParams
     */
    public function setIsUnicode($IsUnicode)
    {
        $this->IsUnicode = $IsUnicode;
        return $this;
    }
}
