<?php
namespace Cheetahmail\Data\Filters;

class SetFields
{

    /**
     * @var int $queryId
     */
    protected $queryId = null;

    /**
     * @var ArrayOfCriterion $criteria
     */
    protected $criteria = null;

    /**
     * @param int $queryId
     * @param ArrayOfCriterion $criteria
     */
    public function __construct($queryId, $criteria)
    {
        $this->queryId = $queryId;
        $this->criteria = $criteria;
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
     * @return \Cheetahmail\Data\Filters\SetFields
     */
    public function setQueryId($queryId)
    {
        $this->queryId = $queryId;
        return $this;
    }

    /**
     * @return ArrayOfCriterion
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param ArrayOfCriterion $criteria
     * @return \Cheetahmail\Data\Filters\SetFields
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }
}
