<?php
namespace Cheetahmail\Campaigns\Sms;

class ListCustom
{

    /**
     * @var int $state
     */
    protected $state = null;

    /**
     * @param int $state
     */
    public function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return \Cheetahmail\Campaigns\Sms\List
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
