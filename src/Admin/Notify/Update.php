<?php
namespace Cheetahmail\Admin\Notify;

class Update
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
     * @param string $Name
     * @param boolean $IsPrivate
     * @param string $Emails
     * @param string $Lang
     */
    public function __construct($IdNotify, $Name, $IsPrivate, $Emails, $Lang)
    {
        $this->IdNotify = $IdNotify;
        $this->Name = $Name;
        $this->IsPrivate = $IsPrivate;
        $this->Emails = $Emails;
        $this->Lang = $Lang;
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
     * @return \Cheetahmail\Admin\Notify\Update
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
     * @return \Cheetahmail\Admin\Notify\Update
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
     * @return \Cheetahmail\Admin\Notify\Update
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
     * @return \Cheetahmail\Admin\Notify\Update
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
     * @return \Cheetahmail\Admin\Notify\Update
     */
    public function setLang($Lang)
    {
        $this->Lang = $Lang;
        return $this;
    }
}
