<?php

namespace Cheetahmail\ChronoContact;

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
     * @return \Cheetahmail\ChronoContact\DeleteChrono
     */
    public function setIdChrono($IdChrono)
    {
        $this->IdChrono = $IdChrono;
        return $this;
    }
}
