<?php
namespace Cheetahmail\Data\Segment;

class DeleteSegment
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
     * @return \Cheetahmail\Data\Segment\DeleteSegment
     */
    public function setIdQuery($idQuery)
    {
        $this->idQuery = $idQuery;
        return $this;
    }
}
