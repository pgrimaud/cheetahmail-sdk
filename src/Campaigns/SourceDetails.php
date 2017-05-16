<?php
namespace Cheetahmail\Campaigns;

class SourceDetails
{

    /**
     * @var int $idsent
     */
    protected $idsent = null;

    /**
     * @var int $idarch
     */
    protected $idarch = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $htmlsrc
     */
    protected $htmlsrc = null;

    /**
     * @var string $txtsrc
     */
    protected $txtsrc = null;

    /**
     * @var int $format
     */
    protected $format = null;

    /**
     * @param int $idsent
     * @param int $idarch
     * @param int $format
     */
    public function __construct($idsent, $idarch, $format)
    {
        $this->idsent = $idsent;
        $this->idarch = $idarch;
        $this->format = $format;
    }

    /**
     * @return int
     */
    public function getIdsent()
    {
        return $this->idsent;
    }

    /**
     * @param int $idsent
     * @return \Cheetahmail\Campaigns\SourceDetails
     */
    public function setIdsent($idsent)
    {
        $this->idsent = $idsent;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdarch()
    {
        return $this->idarch;
    }

    /**
     * @param int $idarch
     * @return \Cheetahmail\Campaigns\SourceDetails
     */
    public function setIdarch($idarch)
    {
        $this->idarch = $idarch;
        return $this;
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
     * @return \Cheetahmail\Campaigns\SourceDetails
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlsrc()
    {
        return $this->htmlsrc;
    }

    /**
     * @param string $htmlsrc
     * @return \Cheetahmail\Campaigns\SourceDetails
     */
    public function setHtmlsrc($htmlsrc)
    {
        $this->htmlsrc = $htmlsrc;
        return $this;
    }

    /**
     * @return string
     */
    public function getTxtsrc()
    {
        return $this->txtsrc;
    }

    /**
     * @param string $txtsrc
     * @return \Cheetahmail\Campaigns\SourceDetails
     */
    public function setTxtsrc($txtsrc)
    {
        $this->txtsrc = $txtsrc;
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
     * @return \Cheetahmail\Campaigns\SourceDetails
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }
}
