<?php

namespace Cheetahmail\Notify;

class Delete
{

    /**
     * @var int $IdNotify
     */
    protected $IdNotify = null;

    /**
     * @param int $IdNotify
     */
    public function __construct($IdNotify)
    {
      $this->IdNotify = $IdNotify;
    }

    /**
     * @return int
     */
    public function getIdNotify()
    {
      return $this->IdNotify;
    }

    /**
     * @param int $IdNotify
     * @return \Cheetahmail\Notify\Delete
     */
    public function setIdNotify($IdNotify)
    {
      $this->IdNotify = $IdNotify;
      return $this;
    }

}
