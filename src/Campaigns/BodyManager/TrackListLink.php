<?php

namespace Cheetahmail\Campaigns\BodyManager;

class TrackListLink
{

    /**
     * @var ArrayOfRelayDetails $_tracks
     */
    protected $_tracks = null;

    /**
     * @param ArrayOfRelayDetails $_tracks
     */
    public function __construct($_tracks)
    {
      $this->_tracks = $_tracks;
    }

    /**
     * @return ArrayOfRelayDetails
     */
    public function get_tracks()
    {
      return $this->_tracks;
    }

    /**
     * @param ArrayOfRelayDetails $_tracks
     * @return \Cheetahmail\Campaigns\BodyManager\TrackListLink
     */
    public function set_tracks($_tracks)
    {
      $this->_tracks = $_tracks;
      return $this;
    }

}
