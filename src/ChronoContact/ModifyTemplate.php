<?php

namespace Cheetahmail\ChronoContact;

class ModifyTemplate
{

    /**
     * @var int $IdTemplate
     */
    protected $IdTemplate = null;

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
     * @param int $IdTemplate
     * @param string $TemplateName
     * @param string $SourceHTML
     * @param string $SourceTXT
     * @param string $subject
     */
    public function __construct($IdTemplate, $TemplateName, $SourceHTML, $SourceTXT, $subject)
    {
        $this->IdTemplate = $IdTemplate;
        $this->TemplateName = $TemplateName;
        $this->SourceHTML = $SourceHTML;
        $this->SourceTXT = $SourceTXT;
        $this->subject = $subject;
    }

    /**
     * @return int
     */
    public function getIdTemplate()
    {
        return $this->IdTemplate;
    }

    /**
     * @param int $IdTemplate
     * @return \Cheetahmail\ChronoContact\ModifyTemplate
     */
    public function setIdTemplate($IdTemplate)
    {
        $this->IdTemplate = $IdTemplate;
        return $this;
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
     * @return \Cheetahmail\ChronoContact\ModifyTemplate
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
     * @return \Cheetahmail\ChronoContact\ModifyTemplate
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
     * @return \Cheetahmail\ChronoContact\ModifyTemplate
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
     * @return \Cheetahmail\ChronoContact\ModifyTemplate
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }
}
