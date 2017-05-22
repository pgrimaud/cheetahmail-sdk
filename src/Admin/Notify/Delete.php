<?php
namespace Cheetahmail\Admin\Notify;

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
     * @return \Cheetahmail\Admin\Notify\Delete
     */
    public function setIdNotify($IdNotify)
    {
        $this->IdNotify = $IdNotify;
        return $this;
    }
}
