<?php
namespace Cheetahmail\Data\Ssis;

class GetlistMapping
{

    /**
     * @var SSISType $typeSSIS
     */
    protected $typeSSIS = null;

    /**
     * @param SSISType $typeSSIS
     */
    public function __construct($typeSSIS)
    {
        $this->typeSSIS = $typeSSIS;
    }

    /**
     * @return SSISType
     */
    public function getTypeSSIS()
    {
        return $this->typeSSIS;
    }

    /**
     * @param SSISType $typeSSIS
     * @return \Cheetahmail\Data\Ssis\GetlistMapping
     */
    public function setTypeSSIS($typeSSIS)
    {
        $this->typeSSIS = $typeSSIS;
        return $this;
    }
}
