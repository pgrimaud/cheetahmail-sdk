<?php

namespace Cheetahmail\Filters;

class CountFilter
{

    /**
     * @var int $_idFilter
     */
    protected $_idFilter = null;

    /**
     * @param int $_idFilter
     */
    public function __construct($_idFilter)
    {
      $this->_idFilter = $_idFilter;
    }

    /**
     * @return int
     */
    public function get_idFilter()
    {
      return $this->_idFilter;
    }

    /**
     * @param int $_idFilter
     * @return \Cheetahmail\Filters\CountFilter
     */
    public function set_idFilter($_idFilter)
    {
      $this->_idFilter = $_idFilter;
      return $this;
    }

}
