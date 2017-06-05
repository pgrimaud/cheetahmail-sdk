<?php
namespace Cheetahmail\Data\Target;

class Rename
{

    /**
     * @var int $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $idQuery
     */
    protected $idQuery = null;

    /**
     * @param int $isPrivate
     * @param string $description
     * @param int $idQuery
     */
    public function __construct($isPrivate, $description, $idQuery)
    {
        $this->isPrivate = $isPrivate;
        $this->description = $description;
        $this->idQuery = $idQuery;
    }

    /**
     * @return int
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * @param int $isPrivate
     * @return \Cheetahmail\Data\Target\Rename
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
     * @return \Cheetahmail\Data\Target\Rename
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdQuery()
    {
        return $this->idQuery;
    }

    /**
     * @param int $idQuery
     * @return \Cheetahmail\Data\Target\Rename
     */
    public function setIdQuery($idQuery)
    {
        $this->idQuery = $idQuery;
        return $this;
    }
}
