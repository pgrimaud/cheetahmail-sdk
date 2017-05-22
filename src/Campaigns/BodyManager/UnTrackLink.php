<?php
namespace Cheetahmail\Campaigns\BodyManager;

class UnTrackLink
{

    /**
     * @var int $_nIdTrack
     */
    protected $_nIdTrack = null;

    /**
     * @param int $_nIdTrack
     */
    public function __construct($_nIdTrack)
    {
        $this->_nIdTrack = $_nIdTrack;
    }

    /**
     * @return int
     */
    public function get_nIdTrack()
    {
        return $this->_nIdTrack;
    }

    /**
     * @param int $_nIdTrack
     * @return \Cheetahmail\Campaigns\BodyManager\UnTrackLink
     */
    public function set_nIdTrack($_nIdTrack)
    {
        $this->_nIdTrack = $_nIdTrack;
        return $this;
    }
}
