<?php
namespace Cheetahmail\Data\Filters;

class Criterion
{

    /**
     * @var int $IdField
     */
    protected $IdField = null;

    /**
     * @var EOperation $Operation
     */
    protected $Operation = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param int $IdField
     * @param EOperation $Operation
     */
    public function __construct($IdField, $Operation)
    {
        $this->IdField = $IdField;
        $this->Operation = $Operation;
    }

    /**
     * @return int
     */
    public function getIdField()
    {
        return $this->IdField;
    }

    /**
     * @param int $IdField
     * @return \Cheetahmail\Data\Filters\Criterion
     */
    public function setIdField($IdField)
    {
        $this->IdField = $IdField;
        return $this;
    }

    /**
     * @return EOperation
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * @param EOperation $Operation
     * @return \Cheetahmail\Data\Filters\Criterion
     */
    public function setOperation($Operation)
    {
        $this->Operation = $Operation;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Cheetahmail\Data\Filters\Criterion
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }
}
