<?php
namespace Cheetahmail\Campaigns\BodyManager;

class TrackLinkForWA
{

    /**
     * @var int $_IdTrack
     */
    protected $_IdTrack = null;

    /**
     * @var int $_idWA
     */
    protected $_idWA = null;

    /**
     * @var int $_idCamp
     */
    protected $_idCamp = null;

    /**
     * @var int $_idSent
     */
    protected $_idSent = null;

    /**
     * @param int $_IdTrack
     * @param int $_idWA
     * @param int $_idCamp
     * @param int $_idSent
     */
    public function __construct($_IdTrack, $_idWA, $_idCamp, $_idSent)
    {
        $this->_IdTrack = $_IdTrack;
        $this->_idWA = $_idWA;
        $this->_idCamp = $_idCamp;
        $this->_idSent = $_idSent;
    }

    /**
     * @return int
     */
    public function get_IdTrack()
    {
        return $this->_IdTrack;
    }

    /**
     * @param int $_IdTrack
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLinkForWA
     */
    public function set_IdTrack($_IdTrack)
    {
        $this->_IdTrack = $_IdTrack;
        return $this;
    }

    /**
     * @return int
     */
    public function get_idWA()
    {
        return $this->_idWA;
    }

    /**
     * @param int $_idWA
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLinkForWA
     */
    public function set_idWA($_idWA)
    {
        $this->_idWA = $_idWA;
        return $this;
    }

    /**
     * @return int
     */
    public function get_idCamp()
    {
        return $this->_idCamp;
    }

    /**
     * @param int $_idCamp
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLinkForWA
     */
    public function set_idCamp($_idCamp)
    {
        $this->_idCamp = $_idCamp;
        return $this;
    }

    /**
     * @return int
     */
    public function get_idSent()
    {
        return $this->_idSent;
    }

    /**
     * @param int $_idSent
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLinkForWA
     */
    public function set_idSent($_idSent)
    {
        $this->_idSent = $_idSent;
        return $this;
    }
}
