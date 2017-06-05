<?php
namespace Cheetahmail\Data\Target;

class TargetEntityReturn
{

    /**
     * @var string $Desc
     */
    protected $Desc = null;

    /**
     * @var int $IdQuery
     */
    protected $IdQuery = null;

    /**
     * @param int $IdQuery
     */
    public function __construct($IdQuery)
    {
        $this->IdQuery = $IdQuery;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->Desc;
    }

    /**
     * @param string $Desc
     * @return \Cheetahmail\Data\Target\TargetEntityReturn
     */
    public function setDesc($Desc)
    {
        $this->Desc = $Desc;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdQuery()
    {
        return $this->IdQuery;
    }

    /**
     * @param int $IdQuery
     * @return \Cheetahmail\Data\Target\TargetEntityReturn
     */
    public function setIdQuery($IdQuery)
    {
        $this->IdQuery = $IdQuery;
        return $this;
    }
}
