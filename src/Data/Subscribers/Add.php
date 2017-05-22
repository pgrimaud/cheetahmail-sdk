<?php
namespace Cheetahmail\Data\Subscribers;

class Add
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $IPAddress
     */
    protected $IPAddress = null;

    /**
     * @var string $origin
     */
    protected $origin = null;

    /**
     * @param string $email
     * @param string $IPAddress
     * @param string $origin
     */
    public function __construct($email, $IPAddress, $origin)
    {
        $this->email = $email;
        $this->IPAddress = $IPAddress;
        $this->origin = $origin;
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
     * @return \Cheetahmail\Data\Subscribers\Add
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return \Cheetahmail\Data\Subscribers\Add
     */
    public function setIPAddress($IPAddress)
    {
        $this->IPAddress = $IPAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return \Cheetahmail\Data\Subscribers\Add
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }
}
