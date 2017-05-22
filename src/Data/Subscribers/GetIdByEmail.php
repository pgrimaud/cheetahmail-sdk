<?php
namespace Cheetahmail\Data\Subscribers;

class GetIdByEmail
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @param string $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return \Cheetahmail\Data\Subscribers\GetIdByEmail
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
