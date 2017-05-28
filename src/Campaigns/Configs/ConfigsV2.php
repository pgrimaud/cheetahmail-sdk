<?php
namespace Cheetahmail\Campaigns\Configs;

use Cheetahmail\AuthHeaderInterface;

class ConfigsV2 extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'ListConfig'                    => 'Cheetahmail\\Campaigns\\Configs\\ListConfig',
        'ListConfigResponse'            => 'Cheetahmail\\Campaigns\\Configs\\ListConfigResponse',
        'ArrayOfConfigDetails'          => 'Cheetahmail\\Campaigns\\Configs\\ArrayOfConfigDetails',
        'ConfigDetails'                 => 'Cheetahmail\\Campaigns\\Configs\\ConfigDetails',
        'AuthHeader'                    => 'Cheetahmail\\Campaigns\\Configs\\AuthHeader',
        'CreateConfig'                  => 'Cheetahmail\\Campaigns\\Configs\\CreateConfig',
        'CreateConfigResponse'          => 'Cheetahmail\\Campaigns\\Configs\\CreateConfigResponse',
        'UpdateConfig'                  => 'Cheetahmail\\Campaigns\\Configs\\UpdateConfig',
        'UpdateConfigResponse'          => 'Cheetahmail\\Campaigns\\Configs\\UpdateConfigResponse',
        'GetConfig'                     => 'Cheetahmail\\Campaigns\\Configs\\GetConfig',
        'GetConfigResponse'             => 'Cheetahmail\\Campaigns\\Configs\\GetConfigResponse',
        'DeleteConfig'                  => 'Cheetahmail\\Campaigns\\Configs\\DeleteConfig',
        'DeleteConfigResponse'          => 'Cheetahmail\\Campaigns\\Configs\\DeleteConfigResponse',
        'ConfigIsDkim'                  => 'Cheetahmail\\Campaigns\\Configs\\ConfigIsDkim',
        'ConfigIsDkimResponse'          => 'Cheetahmail\\Campaigns\\Configs\\ConfigIsDkimResponse',
        'BaseIsDkim'                    => 'Cheetahmail\\Campaigns\\Configs\\BaseIsDkim',
        'BaseIsDkimResponse'            => 'Cheetahmail\\Campaigns\\Configs\\BaseIsDkimResponse',
        'SetDefaultConfig'              => 'Cheetahmail\\Campaigns\\Configs\\SetDefaultConfig',
        'SetDefaultConfigResponse'      => 'Cheetahmail\\Campaigns\\Configs\\SetDefaultConfigResponse',
        'ListDomain'                    => 'Cheetahmail\\Campaigns\\Configs\\ListDomain',
        'ListDomainResponse'            => 'Cheetahmail\\Campaigns\\Configs\\ListDomainResponse',
        'ArrayOfDomain'                 => 'Cheetahmail\\Campaigns\\Configs\\ArrayOfDomain',
        'Domain'                        => 'Cheetahmail\\Campaigns\\Configs\\Domain',
        'GetDomain'                     => 'Cheetahmail\\Campaigns\\Configs\\GetDomain',
        'GetDomainResponse'             => 'Cheetahmail\\Campaigns\\Configs\\GetDomainResponse',
        'SetDomain'                     => 'Cheetahmail\\Campaigns\\Configs\\SetDomain',
        'SetDomainResponse'             => 'Cheetahmail\\Campaigns\\Configs\\SetDomainResponse',
        'SetListUnsubscribe'            => 'Cheetahmail\\Campaigns\\Configs\\SetListUnsubscribe',
        'SetListUnsubscribeResponse'    => 'Cheetahmail\\Campaigns\\Configs\\SetListUnsubscribeResponse',
        'EnableListUnsubscribe'         => 'Cheetahmail\\Campaigns\\Configs\\EnableListUnsubscribe',
        'EnableListUnsubscribeResponse' => 'Cheetahmail\\Campaigns\\Configs\\EnableListUnsubscribeResponse',
        'GetListUnsubscribe'            => 'Cheetahmail\\Campaigns\\Configs\\GetListUnsubscribe',
        'GetListUnsubscribeResponse'    => 'Cheetahmail\\Campaigns\\Configs\\GetListUnsubscribeResponse',
        'ListUnsubscribe'               => 'Cheetahmail\\Campaigns\\Configs\\ListUnsubscribe',
        'ListHeader'                    => 'Cheetahmail\\Campaigns\\Configs\\ListHeader',
        'ListHeaderResponse'            => 'Cheetahmail\\Campaigns\\Configs\\ListHeaderResponse',
        'ArrayOfHeader'                 => 'Cheetahmail\\Campaigns\\Configs\\ArrayOfHeader',
        'Header'                        => 'Cheetahmail\\Campaigns\\Configs\\Header',
        'AddHeader'                     => 'Cheetahmail\\Campaigns\\Configs\\AddHeader',
        'AddHeaderResponse'             => 'Cheetahmail\\Campaigns\\Configs\\AddHeaderResponse',
        'RemoveHeader'                  => 'Cheetahmail\\Campaigns\\Configs\\RemoveHeader',
        'RemoveHeaderResponse'          => 'Cheetahmail\\Campaigns\\Configs\\RemoveHeaderResponse',
    );

    /**
     * ConfigsV2 constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/campaigns/configsv2.wsdl.wsdl';
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge([
            'features' => 1,
        ]);
        parent::__construct($wsdl, $options);
    }

    /**
     * @param AuthHeaderInterface $authHeader
     * @return \SoapHeader
     */
    public function createHeader(AuthHeaderInterface $authHeader)
    {
        $data           = new \StdClass();
        $data->UserName = new \SoapVar($authHeader->getUserName(), XSD_STRING, null, null, null, self::EMS_WS_NAMESPACE);
        $data->Password = new \SoapVar($authHeader->getPassword(), XSD_STRING, null, null, null, self::EMS_WS_NAMESPACE);
        $data->IdMlist  = new \SoapVar($authHeader->getIdMlist(), XSD_INTEGER, null, null, null, self::EMS_WS_NAMESPACE);
        $headerValues   = new \SoapVar($data, SOAP_ENC_OBJECT, null, null, null, self::EMS_WS_NAMESPACE);
        $header         = new \SoapHeader(self::EMS_WS_NAMESPACE, "AuthHeader", $headerValues);

        return $header;
    }

    /**
     * Lists all the campaign configurations attached to the database
     *
     * @param ListConfig $parameters
     * @return ListConfigResponse
     */
    public function ListConfig(ListConfig $parameters)
    {
        return $this->__soapCall('ListConfig', array($parameters));
    }

    /**
     * Creates a new campaign configuration
     *
     * @param CreateConfig $parameters
     * @return CreateConfigResponse
     */
    public function CreateConfig(CreateConfig $parameters)
    {
        return $this->__soapCall('CreateConfig', array($parameters));
    }

    /**
     * Updates a campaign configuration
     *
     * @param UpdateConfig $parameters
     * @return UpdateConfigResponse
     */
    public function UpdateConfig(UpdateConfig $parameters)
    {
        return $this->__soapCall('UpdateConfig', array($parameters));
    }

    /**
     * Returns information on a specific campaign configuration
     *
     * @param GetConfig $parameters
     * @return GetConfigResponse
     */
    public function GetConfig(GetConfig $parameters)
    {
        return $this->__soapCall('GetConfig', array($parameters));
    }

    /**
     * Deletes a campaign configuration
     *
     * @param DeleteConfig $parameters
     * @return DeleteConfigResponse
     */
    public function DeleteConfig(DeleteConfig $parameters)
    {
        return $this->__soapCall('DeleteConfig', array($parameters));
    }

    /**
     * Method used to determine if a campaign configuration is DKIM or not.
     *
     * @param ConfigIsDkim $parameters
     * @return ConfigIsDkimResponse
     */
    public function ConfigIsDkim(ConfigIsDkim $parameters)
    {
        return $this->__soapCall('ConfigIsDkim', array($parameters));
    }

    /**
     * Method used to determine if DKIM is activated on the database.
     *
     * @param BaseIsDkim $parameters
     * @return BaseIsDkimResponse
     */
    public function BaseIsDkim(BaseIsDkim $parameters)
    {
        return $this->__soapCall('BaseIsDkim', array($parameters));
    }

    /**
     * Method used to set a default config with an id config.
     *
     * @param SetDefaultConfig $parameters
     * @return SetDefaultConfigResponse
     */
    public function SetDefaultConfig(SetDefaultConfig $parameters)
    {
        return $this->__soapCall('SetDefaultConfig', array($parameters));
    }

    /**
     * Lists all the campaign configuration domains. This methode works only for DKIM configs.
     *
     * @param ListDomain $parameters
     * @return ListDomainResponse
     */
    public function ListDomain(ListDomain $parameters)
    {
        return $this->__soapCall('ListDomain', array($parameters));
    }

    /**
     * Returns the domain associated to a specific DKIM configuration. This method only works with DKIM configs.
     *
     * @param GetDomain $parameters
     * @return GetDomainResponse
     */
    public function GetDomain(GetDomain $parameters)
    {
        return $this->__soapCall('GetDomain', array($parameters));
    }

    /**
     * Sets a spécific domain in a choosen DKIM Campaign configuration. This method only works with DKIM configs.
     *
     * @param SetDomain $parameters
     * @return SetDomainResponse
     */
    public function SetDomain(SetDomain $parameters)
    {
        return $this->__soapCall('SetDomain', array($parameters));
    }

    /**
     * Updates an unsubscribe link on a DKIM campaign configuration. This method only works with DKIM configs.
     *
     * @param SetListUnsubscribe $parameters
     * @return SetListUnsubscribeResponse
     */
    public function SetListUnsubscribe(SetListUnsubscribe $parameters)
    {
        return $this->__soapCall('SetListUnsubscribe', array($parameters));
    }

    /**
     * Enables or disables a ListUnsubscribe link on a DKIM campaign configuration. This method only works with DKIM configs.
     *
     * @param EnableListUnsubscribe $parameters
     * @return EnableListUnsubscribeResponse
     */
    public function EnableListUnsubscribe(EnableListUnsubscribe $parameters)
    {
        return $this->__soapCall('EnableListUnsubscribe', array($parameters));
    }

    /**
     * Returns a ListUnsubscribe link attached to a specific DKIM campaign configuration. This method only works with DKIM configs.
     *
     * @param GetListUnsubscribe $parameters
     * @return GetListUnsubscribeResponse
     */
    public function GetListUnsubscribe(GetListUnsubscribe $parameters)
    {
        return $this->__soapCall('GetListUnsubscribe', array($parameters));
    }

    /**
     * Lists all the headers attached to a DKIM campaign configuration. This method only works with DKIM configs.
     *
     * @param ListHeader $parameters
     * @return ListHeaderResponse
     */
    public function ListHeader(ListHeader $parameters)
    {
        return $this->__soapCall('ListHeader', array($parameters));
    }

    /**
     * Adds a header to a specific campaign configuration. This method only works on DKIM configs, max 10 headers per config.
     *
     * @param AddHeader $parameters
     * @return AddHeaderResponse
     */
    public function AddHeader(AddHeader $parameters)
    {
        return $this->__soapCall('AddHeader', array($parameters));
    }

    /**
     * Deletes the header from a campaign configuration. This method only works on DKIM configs.
     *
     * @param RemoveHeader $parameters
     * @return RemoveHeaderResponse
     */
    public function RemoveHeader(RemoveHeader $parameters)
    {
        return $this->__soapCall('RemoveHeader', array($parameters));
    }
}
