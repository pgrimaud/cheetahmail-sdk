<?php
namespace Cheetahmail\Campaigns\Campaigns;

class FilterParams
{

    /**
     * @var int $behavioralFilterId
     */
    protected $behavioralFilterId = null;

    /**
     * @var int $fieldFilterId
     */
    protected $fieldFilterId = null;

    /**
     * @var int $sqlQueryFilterId
     */
    protected $sqlQueryFilterId = null;

    /**
     * @var int $targetId
     */
    protected $targetId = null;

    /**
     * @param int $behavioralFilterId
     * @param int $fieldFilterId
     * @param int $sqlQueryFilterId
     * @param int $targetId
     */
    public function __construct($behavioralFilterId, $fieldFilterId, $sqlQueryFilterId, $targetId)
    {
        $this->behavioralFilterId = $behavioralFilterId;
        $this->fieldFilterId = $fieldFilterId;
        $this->sqlQueryFilterId = $sqlQueryFilterId;
        $this->targetId = $targetId;
    }

    /**
     * @return int
     */
    public function getBehavioralFilterId()
    {
        return $this->behavioralFilterId;
    }

    /**
     * @param int $behavioralFilterId
     * @return \Cheetahmail\Campaigns\Campaigns\FilterParams
     */
    public function setBehavioralFilterId($behavioralFilterId)
    {
        $this->behavioralFilterId = $behavioralFilterId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFieldFilterId()
    {
        return $this->fieldFilterId;
    }

    /**
     * @param int $fieldFilterId
     * @return \Cheetahmail\Campaigns\Campaigns\FilterParams
     */
    public function setFieldFilterId($fieldFilterId)
    {
        $this->fieldFilterId = $fieldFilterId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSqlQueryFilterId()
    {
        return $this->sqlQueryFilterId;
    }

    /**
     * @param int $sqlQueryFilterId
     * @return \Cheetahmail\Campaigns\Campaigns\FilterParams
     */
    public function setSqlQueryFilterId($sqlQueryFilterId)
    {
        $this->sqlQueryFilterId = $sqlQueryFilterId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * @param int $targetId
     * @return \Cheetahmail\Campaigns\Campaigns\FilterParams
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
        return $this;
    }
}
