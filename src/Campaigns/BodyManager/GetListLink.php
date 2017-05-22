<?php
namespace Cheetahmail\Campaigns\BodyManager;

class GetListLink
{

    /**
     * @var int $_nidCata
     */
    protected $_nidCata = null;

    /**
     * @param int $_nidCata
     */
    public function __construct($_nidCata)
    {
        $this->_nidCata = $_nidCata;
    }

    /**
     * @return int
     */
    public function get_nidCata()
    {
        return $this->_nidCata;
    }

    /**
     * @param int $_nidCata
     * @return \Cheetahmail\Campaigns\BodyManager\GetListLink
     */
    public function set_nidCata($_nidCata)
    {
        $this->_nidCata = $_nidCata;
        return $this;
    }
}
