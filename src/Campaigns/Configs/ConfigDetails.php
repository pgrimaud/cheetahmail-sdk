<?php
namespace Cheetahmail\Campaigns\Configs;

class ConfigDetails
{

    /**
     * @var int $idMlist
     */
    protected $idMlist = null;

    /**
     * @var int $idConf
     */
    protected $idConf = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $mailFrom
     */
    protected $mailFrom = null;

    /**
     * @var string $mailFromAddr
     */
    protected $mailFromAddr = null;

    /**
     * @var string $mailRetNpai
     */
    protected $mailRetNpai = null;

    /**
     * @var string $mailReply
     */
    protected $mailReply = null;

    /**
     * @var string $mailTo
     */
    protected $mailTo = null;

    /**
     * @var string $mailDep
     */
    protected $mailDep = null;

    /**
     * @var string $htmlUnsubs
     */
    protected $htmlUnsubs = null;

    /**
     * @var string $txtUnsubs
     */
    protected $txtUnsubs = null;

    /**
     * @var string $htmlFooter
     */
    protected $htmlFooter = null;

    /**
     * @var string $txtFooter
     */
    protected $txtFooter = null;

    /**
     * @var string $htmlHeader
     */
    protected $htmlHeader = null;

    /**
     * @var string $txtHeader
     */
    protected $txtHeader = null;

    /**
     * @var string $customHeaderKey
     */
    protected $customHeaderKey = null;

    /**
     * @var string $customHeaderValue
     */
    protected $customHeaderValue = null;

    /**
     * @var Verp $verpSend
     */
    protected $verpSend = null;

    /**
     * @var Charset $charset
     */
    protected $charset = null;

    /**
     * @var boolean $miroir
     */
    protected $miroir = null;

    /**
     * @var boolean $isDkim
     */
    protected $isDkim = null;

    /**
     * @param int $idMlist
     * @param int $idConf
     * @param Verp $verpSend
     * @param Charset $charset
     * @param boolean $miroir
     * @param boolean $isDkim
     */
    public function __construct($idMlist, $idConf, $verpSend, $charset, $miroir, $isDkim)
    {
        $this->idMlist = $idMlist;
        $this->idConf = $idConf;
        $this->verpSend = $verpSend;
        $this->charset = $charset;
        $this->miroir = $miroir;
        $this->isDkim = $isDkim;
    }

    /**
     * @return int
     */
    public function getIdMlist()
    {
        return $this->idMlist;
    }

    /**
     * @param int $idMlist
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setIdMlist($idMlist)
    {
        $this->idMlist = $idMlist;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdConf()
    {
        return $this->idConf;
    }

    /**
     * @param int $idConf
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setIdConf($idConf)
    {
        $this->idConf = $idConf;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mailFrom;
    }

    /**
     * @param string $mailFrom
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setMailFrom($mailFrom)
    {
        $this->mailFrom = $mailFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailFromAddr()
    {
        return $this->mailFromAddr;
    }

    /**
     * @param string $mailFromAddr
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setMailFromAddr($mailFromAddr)
    {
        $this->mailFromAddr = $mailFromAddr;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailRetNpai()
    {
        return $this->mailRetNpai;
    }

    /**
     * @param string $mailRetNpai
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setMailRetNpai($mailRetNpai)
    {
        $this->mailRetNpai = $mailRetNpai;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailReply()
    {
        return $this->mailReply;
    }

    /**
     * @param string $mailReply
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setMailReply($mailReply)
    {
        $this->mailReply = $mailReply;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailTo()
    {
        return $this->mailTo;
    }

    /**
     * @param string $mailTo
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setMailTo($mailTo)
    {
        $this->mailTo = $mailTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailDep()
    {
        return $this->mailDep;
    }

    /**
     * @param string $mailDep
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setMailDep($mailDep)
    {
        $this->mailDep = $mailDep;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlUnsubs()
    {
        return $this->htmlUnsubs;
    }

    /**
     * @param string $htmlUnsubs
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setHtmlUnsubs($htmlUnsubs)
    {
        $this->htmlUnsubs = $htmlUnsubs;
        return $this;
    }

    /**
     * @return string
     */
    public function getTxtUnsubs()
    {
        return $this->txtUnsubs;
    }

    /**
     * @param string $txtUnsubs
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setTxtUnsubs($txtUnsubs)
    {
        $this->txtUnsubs = $txtUnsubs;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlFooter()
    {
        return $this->htmlFooter;
    }

    /**
     * @param string $htmlFooter
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setHtmlFooter($htmlFooter)
    {
        $this->htmlFooter = $htmlFooter;
        return $this;
    }

    /**
     * @return string
     */
    public function getTxtFooter()
    {
        return $this->txtFooter;
    }

    /**
     * @param string $txtFooter
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setTxtFooter($txtFooter)
    {
        $this->txtFooter = $txtFooter;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlHeader()
    {
        return $this->htmlHeader;
    }

    /**
     * @param string $htmlHeader
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setHtmlHeader($htmlHeader)
    {
        $this->htmlHeader = $htmlHeader;
        return $this;
    }

    /**
     * @return string
     */
    public function getTxtHeader()
    {
        return $this->txtHeader;
    }

    /**
     * @param string $txtHeader
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setTxtHeader($txtHeader)
    {
        $this->txtHeader = $txtHeader;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomHeaderKey()
    {
        return $this->customHeaderKey;
    }

    /**
     * @param string $customHeaderKey
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setCustomHeaderKey($customHeaderKey)
    {
        $this->customHeaderKey = $customHeaderKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomHeaderValue()
    {
        return $this->customHeaderValue;
    }

    /**
     * @param string $customHeaderValue
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setCustomHeaderValue($customHeaderValue)
    {
        $this->customHeaderValue = $customHeaderValue;
        return $this;
    }

    /**
     * @return Verp
     */
    public function getVerpSend()
    {
        return $this->verpSend;
    }

    /**
     * @param Verp $verpSend
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setVerpSend($verpSend)
    {
        $this->verpSend = $verpSend;
        return $this;
    }

    /**
     * @return Charset
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param Charset $charset
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMiroir()
    {
        return $this->miroir;
    }

    /**
     * @param boolean $miroir
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setMiroir($miroir)
    {
        $this->miroir = $miroir;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDkim()
    {
        return $this->isDkim;
    }

    /**
     * @param boolean $isDkim
     * @return \Cheetahmail\Campaigns\Configs\ConfigDetails
     */
    public function setIsDkim($isDkim)
    {
        $this->isDkim = $isDkim;
        return $this;
    }
}
