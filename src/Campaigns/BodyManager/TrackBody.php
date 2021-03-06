<?php
namespace Cheetahmail\Campaigns\BodyManager;

class TrackBody
{

    /**
     * @var string $_strBody
     */
    protected $_strBody = null;

    /**
     * @var int $_firstCategory
     */
    protected $_firstCategory = null;

    /**
     * @var int $_secondCategory
     */
    protected $_secondCategory = null;

    /**
     * @var boolean $_bisHtml
     */
    protected $_bisHtml = null;

    /**
     * @param string $_strBody
     * @param int $_firstCategory
     * @param int $_secondCategory
     * @param boolean $_bisHtml
     */
    public function __construct($_strBody, $_firstCategory, $_secondCategory, $_bisHtml)
    {
        $this->_strBody = $_strBody;
        $this->_firstCategory = $_firstCategory;
        $this->_secondCategory = $_secondCategory;
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBody
     */
    public function set_strBody($_strBody)
    {
        $this->_strBody = $_strBody;
        return $this;
    }

    /**
     * @return int
     */
    public function get_firstCategory()
    {
        return $this->_firstCategory;
    }

    /**
     * @param int $_firstCategory
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBody
     */
    public function set_firstCategory($_firstCategory)
    {
        $this->_firstCategory = $_firstCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function get_secondCategory()
    {
        return $this->_secondCategory;
    }

    /**
     * @param int $_secondCategory
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBody
     */
    public function set_secondCategory($_secondCategory)
    {
        $this->_secondCategory = $_secondCategory;
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackBody
     */
    public function set_bisHtml($_bisHtml)
    {
        $this->_bisHtml = $_bisHtml;
        return $this;
    }
}
