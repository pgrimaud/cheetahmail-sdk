<?php
namespace Cheetahmail\Campaigns\Configs;

class SetListUnsubscribe
{

    /**
     * @var int $idconf
     */
    protected $idconf = null;

    /**
     * @var string $link
     */
    protected $link = null;

    /**
     * @param int $idconf
     * @param string $link
     */
    public function __construct($idconf, $link)
    {
        $this->idconf = $idconf;
        $this->link = $link;
    }

    /**
     * @return int
     */
    public function getIdconf()
    {
        return $this->idconf;
    }

    /**
     * @param int $idconf
     * @return \Cheetahmail\Campaigns\Configs\SetListUnsubscribe
     */
    public function setIdconf($idconf)
    {
        $this->idconf = $idconf;
        return $this;
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
     * @return \Cheetahmail\Campaigns\Configs\SetListUnsubscribe
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }
}
