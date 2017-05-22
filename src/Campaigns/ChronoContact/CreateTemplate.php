<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class CreateTemplate
{

    /**
     * @var string $TemplateName
     */
    protected $TemplateName = null;

    /**
     * @var string $SourceHTML
     */
    protected $SourceHTML = null;

    /**
     * @var string $SourceTXT
     */
    protected $SourceTXT = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @param string $TemplateName
     * @param string $SourceHTML
     * @param string $SourceTXT
     * @param string $subject
     */
    public function __construct($TemplateName, $SourceHTML, $SourceTXT, $subject)
    {
        $this->TemplateName = $TemplateName;
        $this->SourceHTML = $SourceHTML;
        $this->SourceTXT = $SourceTXT;
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }

    /**
     * @param string $TemplateName
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateTemplate
     */
    public function setTemplateName($TemplateName)
    {
        $this->TemplateName = $TemplateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceHTML()
    {
        return $this->SourceHTML;
    }

    /**
     * @param string $SourceHTML
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateTemplate
     */
    public function setSourceHTML($SourceHTML)
    {
        $this->SourceHTML = $SourceHTML;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceTXT()
    {
        return $this->SourceTXT;
    }

    /**
     * @param string $SourceTXT
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateTemplate
     */
    public function setSourceTXT($SourceTXT)
    {
        $this->SourceTXT = $SourceTXT;
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
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateTemplate
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }
}
