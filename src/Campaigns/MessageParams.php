<?php
namespace Cheetahmail\Campaigns;

class MessageParams
{

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var int $format
     */
    protected $format = null;

    /**
     * @var int $priority
     */
    protected $priority = null;

    /**
     * @var string $htmlSrc
     */
    protected $htmlSrc = null;

    /**
     * @var string $txtSrc
     */
    protected $txtSrc = null;

    /**
     * @param int $format
     * @param int $priority
     */
    public function __construct($format, $priority)
    {
      $this->format = $format;
      $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Cheetahmail\Campaigns\MessageParams
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return int
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param int $format
     * @return \Cheetahmail\Campaigns\MessageParams
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param int $priority
     * @return \Cheetahmail\Campaigns\MessageParams
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return string
     */
    public function getHtmlSrc()
    {
      return $this->htmlSrc;
    }

    /**
     * @param string $htmlSrc
     * @return \Cheetahmail\Campaigns\MessageParams
     */
    public function setHtmlSrc($htmlSrc)
    {
      $this->htmlSrc = $htmlSrc;
      return $this;
    }

    /**
     * @return string
     */
    public function getTxtSrc()
    {
      return $this->txtSrc;
    }

    /**
     * @param string $txtSrc
     * @return \Cheetahmail\Campaigns\MessageParams
     */
    public function setTxtSrc($txtSrc)
    {
      $this->txtSrc = $txtSrc;
      return $this;
    }

}
