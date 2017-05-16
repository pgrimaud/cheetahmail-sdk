<?php

namespace Cheetahmail\Notify;

class Create
{

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
     * @param string $Name
     * @param boolean $IsPrivate
     * @param string $Emails
     * @param string $Lang
     */
    public function __construct($Name, $IsPrivate, $Emails, $Lang)
    {
      $this->Name = $Name;
      $this->IsPrivate = $IsPrivate;
      $this->Emails = $Emails;
      $this->Lang = $Lang;
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
     * @return \Cheetahmail\Notify\Create
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
     * @return \Cheetahmail\Notify\Create
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
     * @return \Cheetahmail\Notify\Create
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
     * @return \Cheetahmail\Notify\Create
     */
    public function setLang($Lang)
    {
      $this->Lang = $Lang;
      return $this;
    }

}
