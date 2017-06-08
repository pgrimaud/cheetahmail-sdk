<?php
namespace Cheetahmail\Data\Ssis;

class Linkedfied
{

    /**
     * @var string $FieldEMS
     */
    protected $FieldEMS = null;

    /**
     * @var string $ColumnName
     */
    protected $ColumnName = null;

    /**
     * @var int $UpdatePriority
     */
    protected $UpdatePriority = null;

    /**
     * @var boolean $DuplicateKey
     */
    protected $DuplicateKey = null;

    /**
     * @var string $FixeValue
     */
    protected $FixeValue = null;

    /**
     * @param int $UpdatePriority
     * @param boolean $DuplicateKey
     */
    public function __construct($UpdatePriority, $DuplicateKey)
    {
        $this->UpdatePriority = $UpdatePriority;
        $this->DuplicateKey = $DuplicateKey;
    }

    /**
     * @return string
     */
    public function getFieldEMS()
    {
        return $this->FieldEMS;
    }

    /**
     * @param string $FieldEMS
     * @return \Cheetahmail\Data\Ssis\Linkedfied
     */
    public function setFieldEMS($FieldEMS)
    {
        $this->FieldEMS = $FieldEMS;
        return $this;
    }

    /**
     * @return string
     */
    public function getColumnName()
    {
        return $this->ColumnName;
    }

    /**
     * @param string $ColumnName
     * @return \Cheetahmail\Data\Ssis\Linkedfied
     */
    public function setColumnName($ColumnName)
    {
        $this->ColumnName = $ColumnName;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdatePriority()
    {
        return $this->UpdatePriority;
    }

    /**
     * @param int $UpdatePriority
     * @return \Cheetahmail\Data\Ssis\Linkedfied
     */
    public function setUpdatePriority($UpdatePriority)
    {
        $this->UpdatePriority = $UpdatePriority;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDuplicateKey()
    {
        return $this->DuplicateKey;
    }

    /**
     * @param boolean $DuplicateKey
     * @return \Cheetahmail\Data\Ssis\Linkedfied
     */
    public function setDuplicateKey($DuplicateKey)
    {
        $this->DuplicateKey = $DuplicateKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getFixeValue()
    {
        return $this->FixeValue;
    }

    /**
     * @param string $FixeValue
     * @return \Cheetahmail\Data\Ssis\Linkedfied
     */
    public function setFixeValue($FixeValue)
    {
        $this->FixeValue = $FixeValue;
        return $this;
    }
}
