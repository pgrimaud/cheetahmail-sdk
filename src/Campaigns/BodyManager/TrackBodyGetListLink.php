<?php
namespace Cheetahmail\Campaigns\BodyManager;

class TrackBodyGetListLink
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
     * @param string $_strBody
     * @param boolean $_bisHtml
     */
    public function __construct($_strBody, $_bisHtml)
    {
        $this->_strBody = $_strBody;
        $this->_bisHtml = $_bisHtml;
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyGetListLink
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBodyGetListLink
     */
    public function set_bisHtml($_bisHtml)
    {
        $this->_bisHtml = $_bisHtml;
        return $this;
    }
}
