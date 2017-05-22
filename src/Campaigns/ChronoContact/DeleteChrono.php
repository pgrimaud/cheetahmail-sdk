<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class DeleteChrono
{

    /**
     * @var int $IdChrono
     */
    protected $IdChrono = null;

    /**
     * @param int $IdChrono
     */
    public function __construct($IdChrono)
    {
        $this->IdChrono = $IdChrono;
    }

    /**
     * @return int
     */
    public function getIdChrono()
    {
        return $this->IdChrono;
    }

    /**
     * @param int $IdChrono
     * @return \Cheetahmail\Campaigns\ChronoContact\DeleteChrono
     */
    public function setIdChrono($IdChrono)
    {
        $this->IdChrono = $IdChrono;
        return $this;
    }
}
