<?php

namespace Cheetahmail\Campaigns\BodyManager;

class UnTrackBody
{

    /**
     * @var string $_strBody
     */
    protected $_strBody = null;

    /**
     * @param string $_strBody
     */
    public function __construct($_strBody)
    {
      $this->_strBody = $_strBody;
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
     * @return \Cheetahmail\Campaigns\BodyManager\UnTrackBody
     */
    public function set_strBody($_strBody)
    {
      $this->_strBody = $_strBody;
      return $this;
    }

}
