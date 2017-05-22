<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class SendMail
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
     * @param string $attachementPath
     * @param boolean $deleteAttachementFile
     */
    public function __construct($chronoId, $userId, $attachementPath, $deleteAttachementFile)
    {
        $this->chronoId = $chronoId;
        $this->userId = $userId;
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
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMail
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
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMail
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMail
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
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMail
     */
    public function setDeleteAttachementFile($deleteAttachementFile)
    {
        $this->deleteAttachementFile = $deleteAttachementFile;
        return $this;
    }
}
