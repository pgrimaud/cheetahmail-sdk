<?php

namespace Cheetahmail\Campaigns\BodyManager;

class CreateCategory
{

    /**
     * @var NewCataDetails $_cdetail
     */
    protected $_cdetail = null;

    /**
     * @param NewCataDetails $_cdetail
     */
    public function __construct($_cdetail)
    {
      $this->_cdetail = $_cdetail;
    }

    /**
     * @return NewCataDetails
     */
    public function get_cdetail()
    {
      return $this->_cdetail;
    }

    /**
     * @param NewCataDetails $_cdetail
     * @return \Cheetahmail\Campaigns\BodyManager\CreateCategory
     */
    public function set_cdetail($_cdetail)
    {
      $this->_cdetail = $_cdetail;
      return $this;
    }

}
