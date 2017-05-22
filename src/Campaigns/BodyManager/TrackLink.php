<?php

namespace Cheetahmail\Campaigns\BodyManager;

class TrackLink
{

    /**
     * @var string $_strLink
     */
    protected $_strLink = null;

    /**
     * @var string $_strDescription
     */
    protected $_strDescription = null;

    /**
     * @var int $_firstCategory
     */
    protected $_firstCategory = null;

    /**
     * @var int $_secondCategory
     */
    protected $_secondCategory = null;

    /**
     * @var boolean $_bAdd
     */
    protected $_bAdd = null;

    /**
     * @param string $_strLink
     * @param string $_strDescription
     * @param int $_firstCategory
     * @param int $_secondCategory
     * @param boolean $_bAdd
     */
    public function __construct($_strLink, $_strDescription, $_firstCategory, $_secondCategory, $_bAdd)
    {
      $this->_strLink = $_strLink;
      $this->_strDescription = $_strDescription;
      $this->_firstCategory = $_firstCategory;
      $this->_secondCategory = $_secondCategory;
      $this->_bAdd = $_bAdd;
    }

    /**
     * @return string
     */
    public function get_strLink()
    {
      return $this->_strLink;
    }

    /**
     * @param string $_strLink
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLink
     */
    public function set_strLink($_strLink)
    {
      $this->_strLink = $_strLink;
      return $this;
    }

    /**
     * @return string
     */
    public function get_strDescription()
    {
      return $this->_strDescription;
    }

    /**
     * @param string $_strDescription
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLink
     */
    public function set_strDescription($_strDescription)
    {
      $this->_strDescription = $_strDescription;
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLink
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
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLink
     */
    public function set_secondCategory($_secondCategory)
    {
      $this->_secondCategory = $_secondCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function get_bAdd()
    {
      return $this->_bAdd;
    }

    /**
     * @param boolean $_bAdd
     * @return \Cheetahmail\Campaigns\BodyManager\TrackLink
     */
    public function set_bAdd($_bAdd)
    {
      $this->_bAdd = $_bAdd;
      return $this;
    }

}
