<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class SendMailByPacket
{

    /**
     * @var int $chronoId
     */
    protected $chronoId = null;

    /**
     * @var ArrayOfInt $usersId
     */
    protected $usersId = null;

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
     * @param ArrayOfInt $usersId
     * @param string $attachementPath
     * @param boolean $deleteAttachementFile
     */
    public function __construct($chronoId, $usersId, $attachementPath, $deleteAttachementFile)
    {
        $this->chronoId = $chronoId;
        $this->usersId = $usersId;
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
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailByPacket
     */
    public function setChronoId($chronoId)
    {
        $this->chronoId = $chronoId;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * @param ArrayOfInt $usersId
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailByPacket
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;
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
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailByPacket
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
     * @return \Cheetahmail\Campaigns\ChronoContact\SendMailByPacket
     */
    public function setDeleteAttachementFile($deleteAttachementFile)
    {
        $this->deleteAttachementFile = $deleteAttachementFile;
        return $this;
    }
}
