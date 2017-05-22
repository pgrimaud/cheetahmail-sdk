<?php

namespace Cheetahmail\Campaigns\BodyManager;

class UpdateCategoryOnLink
{

    /**
     * @var RelayDetails $_rdetail
     */
    protected $_rdetail = null;

    /**
     * @param RelayDetails $_rdetail
     */
    public function __construct($_rdetail)
    {
      $this->_rdetail = $_rdetail;
    }

    /**
     * @return RelayDetails
     */
    public function get_rdetail()
    {
      return $this->_rdetail;
    }

    /**
     * @param RelayDetails $_rdetail
     * @return \Cheetahmail\Campaigns\BodyManager\UpdateCategoryOnLink
     */
    public function set_rdetail($_rdetail)
    {
      $this->_rdetail = $_rdetail;
      return $this;
    }

}
