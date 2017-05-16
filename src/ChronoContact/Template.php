<?php

namespace Cheetahmail\ChronoContact;

class Template
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $htmlSource
     */
    protected $htmlSource = null;

    /**
     * @var string $txtSource
     */
    protected $txtSource = null;

    /**
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Cheetahmail\ChronoContact\Template
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \Cheetahmail\ChronoContact\Template
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \Cheetahmail\ChronoContact\Template
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlSource()
    {
        return $this->htmlSource;
    }

    /**
     * @param string $htmlSource
     * @return \Cheetahmail\ChronoContact\Template
     */
    public function setHtmlSource($htmlSource)
    {
        $this->htmlSource = $htmlSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getTxtSource()
    {
        return $this->txtSource;
    }

    /**
     * @param string $txtSource
     * @return \Cheetahmail\ChronoContact\Template
     */
    public function setTxtSource($txtSource)
    {
        $this->txtSource = $txtSource;
        return $this;
    }
}
