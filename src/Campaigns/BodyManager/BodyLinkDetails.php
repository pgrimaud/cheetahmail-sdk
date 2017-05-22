<?php

namespace Cheetahmail\Campaigns\BodyManager;

class BodyLinkDetails
{

    /**
     * @var ArrayOfRelayDetails $Links
     */
    protected $Links = null;

    /**
     * @var string $TrackBody
     */
    protected $TrackBody = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRelayDetails
     */
    public function getLinks()
    {
      return $this->Links;
    }

    /**
     * @param ArrayOfRelayDetails $Links
     * @return \Cheetahmail\Campaigns\BodyManager\BodyLinkDetails
     */
    public function setLinks($Links)
    {
      $this->Links = $Links;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackBody()
    {
      return $this->TrackBody;
    }

    /**
     * @param string $TrackBody
     * @return \Cheetahmail\Campaigns\BodyManager\BodyLinkDetails
     */
    public function setTrackBody($TrackBody)
    {
      $this->TrackBody = $TrackBody;
      return $this;
    }

}
