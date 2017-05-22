<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class SendMailHTML
{

    /**
     * @var int $chronoId
     */
    protected $chronoId = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $HTMLsource
     */
    protected $HTMLsource = null;

    /**
     * @var string $TXTsource
     */
    protected $TXTsource = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $attachementPath
     */
    protected $attachementPath = null;

    /**
     * @var boolean $deleteAttachementFile
     */
    protected $deleteAttachementFile = null;

    /**
     * @param int $chronoId
     * @param int $userId
     * @param string $HTMLsource
     * @param string $TXTsource
     * @param string $subject
     * @param string $attachementPath
     * @param boolean $deleteAttachementFile
     */
    public function __construct($chronoId, $userId, $HTMLsource, $TXTsource, $subject, $attachementPath, $deleteAttachementFile)
    {
        $this->chronoId = $chronoId;
        $this->userId = $userId;
        $this->HTMLsource = $HTMLsource;
        $this->TXTsource = $TXTsource;
        $this->subject = $subject;
        $this->attachementPath = $attachementPath;
        $this->deleteAttachementFile = $deleteAttachementFile;
    }

    /**
     * @return int
     */
    public function getChronoId()
    {
        return $this->chronoId;
    }

    /**
     * @param int $chronoId
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTML
     */
    public function setChronoId($chronoId)
    {
        $this->chronoId = $chronoId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTML
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getHTMLsource()
    {
        return $this->HTMLsource;
    }

    /**
     * @param string $HTMLsource
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTML
     */
    public function setHTMLsource($HTMLsource)
    {
        $this->HTMLsource = $HTMLsource;
        return $this;
    }

    /**
     * @return string
     */
    public function getTXTsource()
    {
        return $this->TXTsource;
    }

    /**
     * @param string $TXTsource
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTML
     */
    public function setTXTsource($TXTsource)
    {
        $this->TXTsource = $TXTsource;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTML
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttachementPath()
    {
        return $this->attachementPath;
    }

    /**
     * @param string $attachementPath
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTML
     */
    public function setAttachementPath($attachementPath)
    {
        $this->attachementPath = $attachementPath;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteAttachementFile()
    {
        return $this->deleteAttachementFile;
    }

    /**
     * @param boolean $deleteAttachementFile
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailHTML
     */
    public function setDeleteAttachementFile($deleteAttachementFile)
    {
        $this->deleteAttachementFile = $deleteAttachementFile;
        return $this;
    }
}
