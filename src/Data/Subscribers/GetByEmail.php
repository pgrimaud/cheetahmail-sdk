<?php
namespace Cheetahmail\Data\Subscribers;

class GetByEmail
{

    /**
     * @var string $u
     */
    protected $u = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @param string $u
     * @param string $email
     */
    public function __construct($u, $email)
    {
        $this->u = $u;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getU()
    {
        return $this->u;
    }

    /**
     * @param string $u
     * @return \Cheetahmail\Data\Subscribers\GetByEmail
     */
    public function setU($u)
    {
        $this->u = $u;
        return $this;
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
     * @return \Cheetahmail\Data\Subscribers\GetByEmail
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
