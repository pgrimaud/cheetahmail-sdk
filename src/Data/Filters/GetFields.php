<?php
namespace Cheetahmail\Data\Filters;

class GetFields
{

    /**
     * @var int $queryId
     */
    protected $queryId = null;

    /**
     * @param int $queryId
     */
    public function __construct($queryId)
    {
        $this->queryId = $queryId;
    }

    /**
     * @return int
     */
    public function getQueryId()
    {
        return $this->queryId;
    }

    /**
     * @param int $queryId
     * @return \Cheetahmail\Data\Filters\GetFields
     */
    public function setQueryId($queryId)
    {
        $this->queryId = $queryId;
        return $this;
    }
}
