<?php

namespace Cheetahmail\Campaigns\BodyManager;

class UpdateCategory
{

    /**
     * @var CataDetails $_cdetail
     */
    protected $_cdetail = null;

    /**
     * @param CataDetails $_cdetail
     */
    public function __construct($_cdetail)
    {
      $this->_cdetail = $_cdetail;
    }

    /**
     * @return CataDetails
     */
    public function get_cdetail()
    {
      return $this->_cdetail;
    }

    /**
     * @param CataDetails $_cdetail
     * @return \Cheetahmail\Campaigns\BodyManager\UpdateCategory
     */
    public function set_cdetail($_cdetail)
    {
      $this->_cdetail = $_cdetail;
      return $this;
    }

}
