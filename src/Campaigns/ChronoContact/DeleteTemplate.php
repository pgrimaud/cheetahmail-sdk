<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class DeleteTemplate
{

    /**
     * @var int $templateId
     */
    protected $templateId = null;

    /**
     * @param int $templateId
     */
    public function __construct($templateId)
    {
        $this->templateId = $templateId;
    }

    /**
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     * @return \Cheetahmail\Campaigns\ChronoContact\DeleteTemplate
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }
}
