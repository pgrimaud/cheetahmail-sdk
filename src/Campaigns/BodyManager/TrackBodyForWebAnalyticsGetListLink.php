<?php
namespace Cheetahmail\Campaigns\BodyManager;

class TrackBodyForWebAnalyticsGetListLink
{

    /**
     * @var string $_strBody
     */
    protected $_strBody = null;

    /**
     * @var boolean $_bisHtml
     */
    protected $_bisHtml = null;

    /**
     * @var int $_idCamp
     */
    protected $_idCamp = null;

    /**
     * @var int $_idSent
     */
    protected $_idSent = null;

    /**
     * @var int $_idWA
     */
    protected $_idWA = null;

    /**
     * @param string $_strBody
     * @param boolean $_bisHtml
     * @param int $_idCamp
     * @param int $_idSent
     * @param int $_idWA
     */
    public function __construct($_strBody, $_bisHtml, $_idCamp, $_idSent, $_idWA)
    {
        $this->_strBody = $_strBody;
        $this->_bisHtml = $_bisHtml;
        $this->_idCamp = $_idCamp;
        $this->_idSent = $_idSent;
        $this->_idWA = $_idWA;
    }

    /**
     * @return string
     */
    public function get_strBody()
    {
        return $this->_strBody;
    }

    /**
     * @param string $_strBody
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyForWebAnalyticsGetListLink
     */
    public function set_strBody($_strBody)
    {
        $this->_strBody = $_strBody;
        return $this;
    }

    /**
     * @return boolean
     */
    public function get_bisHtml()
    {
        return $this->_bisHtml;
    }

    /**
     * @param boolean $_bisHtml
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyForWebAnalyticsGetListLink
     */
    public function set_bisHtml($_bisHtml)
    {
        $this->_bisHtml = $_bisHtml;
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyForWebAnalyticsGetListLink
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyForWebAnalyticsGetListLink
     */
    public function set_idSent($_idSent)
    {
        $this->_idSent = $_idSent;
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyForWebAnalyticsGetListLink
     */
    public function set_idWA($_idWA)
    {
        $this->_idWA = $_idWA;
        return $this;
    }
}
