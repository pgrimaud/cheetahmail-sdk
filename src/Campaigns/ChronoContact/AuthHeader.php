<?php
namespace Cheetahmail\Campaigns\ChronoContact;

use Cheetahmail\AuthHeaderInterface;

class AuthHeader implements AuthHeaderInterface
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var int $IdMlist
     */
    protected $IdMlist = null;

    /**
     * @param int $IdMlist
     */
    public function __construct($IdMlist)
    {
        $this->IdMlist = $IdMlist;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \Cheetahmail\Campaigns\ChronoContact\AuthHeader
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Cheetahmail\Campaigns\ChronoContact\AuthHeader
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdMlist()
    {
        return $this->IdMlist;
    }

    /**
     * @param int $IdMlist
     * @return \Cheetahmail\Campaigns\ChronoContact\AuthHeader
     */
    public function setIdMlist($IdMlist)
    {
        $this->IdMlist = $IdMlist;
        return $this;
    }
}
