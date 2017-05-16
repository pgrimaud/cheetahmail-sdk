<?php
namespace Cheetahmail\Stats;

class Stats extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'List'                       => 'Cheetahmail\\Stats\\ListCustom',
        'ListResponse'               => 'Cheetahmail\\Stats\\ListResponse',
        'ArrayOfCampaignOverview'    => 'Cheetahmail\\Stats\\ArrayOfCampaignOverview',
        'CampaignOverview'           => 'Cheetahmail\\Stats\\CampaignOverview',
        'AuthHeader'                 => 'Cheetahmail\\Stats\\AuthHeader',
        'Get'                        => 'Cheetahmail\\Stats\\Get',
        'GetResponse'                => 'Cheetahmail\\Stats\\GetResponse',
        'CampaignStats'              => 'Cheetahmail\\Stats\\CampaignStats',
        'ListSMS'                    => 'Cheetahmail\\Stats\\ListSMS',
        'ListSMSResponse'            => 'Cheetahmail\\Stats\\ListSMSResponse',
        'ArrayOfSMSCampaignOverview' => 'Cheetahmail\\Stats\\ArrayOfSMSCampaignOverview',
        'SMSCampaignOverview'        => 'Cheetahmail\\Stats\\SMSCampaignOverview',
        'GetSMS'                     => 'Cheetahmail\\Stats\\GetSMS',
        'GetSMSResponse'             => 'Cheetahmail\\Stats\\GetSMSResponse',
        'SMSCampaignStats'           => 'Cheetahmail\\Stats\\SMSCampaignStats',
    );

    /**
     * Stats constructor.
     * @param AuthHeader $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeader $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));

        $wsdl = $wsdl ?: __DIR__ . '/../../data/stats.wsdl';

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
     * @param AuthHeader $authHeader
     * @return \SoapHeader
     */
    public function createHeader(AuthHeader $authHeader)
    {
        $data = new \StdClass();

        $data->UserName = new \SoapVar($authHeader->getUserName(), XSD_STRING, null, null, null, self::EMS_WS_NAMESPACE);
        $data->Password = new \SoapVar($authHeader->getPassword(), XSD_STRING, null, null, null, self::EMS_WS_NAMESPACE);
        $data->IdMlist  = new \SoapVar($authHeader->getIdMlist(), XSD_INTEGER, null, null, null, self::EMS_WS_NAMESPACE);

        $headerValues = new \SoapVar($data, SOAP_ENC_OBJECT, null, null, null, self::EMS_WS_NAMESPACE);

        $header = new \SoapHeader(self::EMS_WS_NAMESPACE, "AuthHeader", $headerValues);
        return $header;
    }

    /**
     * Méthode permettant de lister l'identitifant et la description de chacune des cent dernières campagnes envoyées (hors BAT et campagne sans destinataire)
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Méthode listant quelques chiffres concernant une campagne envoyée
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
        return $this->__soapCall('Get', array($parameters));
    }

    /**
     * Méthode permettant de lister l'identitifant et la description de chacune des cent dernières campagnes SMS envoyées
     *
     * @param ListSMS $parameters
     * @return ListSMSResponse
     */
    public function ListSMS(ListSMS $parameters)
    {
        return $this->__soapCall('ListSMS', array($parameters));
    }

    /**
     * Méthode détaillant les statistiques d'une campagne SMS envoyée
     *
     * @param GetSMS $parameters
     * @return GetSMSResponse
     */
    public function GetSMS(GetSMS $parameters)
    {
        return $this->__soapCall('GetSMS', array($parameters));
    }
}
