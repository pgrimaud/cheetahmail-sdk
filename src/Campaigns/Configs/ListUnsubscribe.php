<?php
namespace Cheetahmail\Campaigns\Configs;

class ListUnsubscribe
{

    /**
     * @var string $link
     */
    protected $link = null;

    /**
     * @var boolean $isEnable
     */
    protected $isEnable = null;

    /**
     * @param boolean $isEnable
     */
    public function __construct($isEnable)
    {
        $this->isEnable = $isEnable;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return \Cheetahmail\Campaigns\Configs\ListUnsubscribe
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEnable()
    {
        return $this->isEnable;
    }

    /**
     * @param boolean $isEnable
     * @return \Cheetahmail\Campaigns\Configs\ListUnsubscribe
     */
    public function setIsEnable($isEnable)
    {
        $this->isEnable = $isEnable;
        return $this;
    }
}
