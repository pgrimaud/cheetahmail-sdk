<?php
namespace Cheetahmail;

interface AuthHeaderInterface
{
    /**
     * AuthHeaderInterface constructor.
     * @param string $IdMlist
     */
    public function __construct($IdMlist);

    /**
     * @return string
     */
    public function getUserName();

    /**
     * @param $UserName
     * @return string
     */
    public function setUserName($UserName);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param $Password
     * @return string
     */
    public function setPassword($Password);

    /**
     * @return string
     */
    public function getIdMlist();

    /**
     * @param $IdMlist
     * @return string
     */
    public function setIdMlist($IdMlist);
}
