<?php
namespace Cheetahmail\Data\Subscribers;

class GetFieldsDefinitionResponse
{

    /**
     * @var ArrayOfFieldDefinition $GetFieldsDefinitionResult
     */
    protected $GetFieldsDefinitionResult = null;

    /**
     * @param ArrayOfFieldDefinition $GetFieldsDefinitionResult
     */
    public function __construct($GetFieldsDefinitionResult)
    {
        $this->GetFieldsDefinitionResult = $GetFieldsDefinitionResult;
    }

    /**
     * @return ArrayOfFieldDefinition
     */
    public function getGetFieldsDefinitionResult()
    {
        return $this->GetFieldsDefinitionResult;
    }

    /**
     * @param ArrayOfFieldDefinition $GetFieldsDefinitionResult
     * @return \Cheetahmail\Data\Subscribers\GetFieldsDefinitionResponse
     */
    public function setGetFieldsDefinitionResult($GetFieldsDefinitionResult)
    {
        $this->GetFieldsDefinitionResult = $GetFieldsDefinitionResult;
        return $this;
    }
}
