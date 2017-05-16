<?php
namespace Cheetahmail\Filters;

class Create
{

    /**
     * @var boolean $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param boolean $isPrivate
     * @param string $description
     */
    public function __construct($isPrivate, $description)
    {
        $this->isPrivate = $isPrivate;
        $this->description = $description;
    }

    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * @param boolean $isPrivate
     * @return \Cheetahmail\Filters\Create
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \Cheetahmail\Filters\Create
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
