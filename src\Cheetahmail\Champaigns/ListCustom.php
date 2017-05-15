<?php

namespace Cheetahmail\Campaigns;

class ListCustom
{

    /**
     * @var STATUS $_status
     */
    protected $_status = null;

    /**
     * @param STATUS $_status
     */
    public function __construct($_status)
    {
      $this->_status = $_status;
    }

    /**
     * @return STATUS
     */
    public function get_status()
    {
      return $this->_status;
    }

    /**
     * @param STATUS $_status
     * @return \Cheetahmail\Campaigns\List
     */
    public function set_status($_status)
    {
      $this->_status = $_status;
      return $this;
    }

}
