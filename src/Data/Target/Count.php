<?php
namespace Cheetahmail\Data\Target;

class Count
{

    /**
     * @var int $idQuery
     */
    protected $idQuery = null;

    /**
     * @param int $idQuery
     */
    public function __construct($idQuery)
    {
        $this->idQuery = $idQuery;
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
     * @return \Cheetahmail\Data\Target\Count
     */
    public function setIdQuery($idQuery)
    {
        $this->idQuery = $idQuery;
        return $this;
    }
}
