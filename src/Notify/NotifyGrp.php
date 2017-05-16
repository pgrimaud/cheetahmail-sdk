<?php
namespace Cheetahmail\Notify;

class NotifyGrp
{

    /**
     * @var int $IdNotify
     */
    protected $IdNotify = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsPrivate
     */
    protected $IsPrivate = null;

    /**
     * @var string $Emails
     */
    protected $Emails = null;

    /**
     * @var string $Lang
     */
    protected $Lang = null;

    /**
     * @param int $IdNotify
     * @param boolean $IsPrivate
     */
    public function __construct($IdNotify, $IsPrivate)
    {
        $this->IdNotify = $IdNotify;
        $this->IsPrivate = $IsPrivate;
    }

    /**
     * @return int
     */
    public function getIdNotify()
    {
        return $this->IdNotify;
    }

    /**
     * @param int $IdNotify
     * @return \Cheetahmail\Notify\NotifyGrp
     */
    public function setIdNotify($IdNotify)
    {
        $this->IdNotify = $IdNotify;
        return $this;
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
     * @return \Cheetahmail\Notify\NotifyGrp
     */
    public function setName($Name)
    {
        $this->Name = $Name;
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
     * @return \Cheetahmail\Notify\NotifyGrp
     */
    public function setIsPrivate($IsPrivate)
    {
        $this->IsPrivate = $IsPrivate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmails()
    {
        return $this->Emails;
    }

    /**
     * @param string $Emails
     * @return \Cheetahmail\Notify\NotifyGrp
     */
    public function setEmails($Emails)
    {
        $this->Emails = $Emails;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->Lang;
    }

    /**
     * @param string $Lang
     * @return \Cheetahmail\Notify\NotifyGrp
     */
    public function setLang($Lang)
    {
        $this->Lang = $Lang;
        return $this;
    }
}
