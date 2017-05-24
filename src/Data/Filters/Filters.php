<?php
namespace Cheetahmail\Data\Filters;

use Cheetahmail\AuthHeaderInterface;

class Filters extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Create'                         => 'Cheetahmail\\Data\\Filters\\Create',
        'CreateResponse'                 => 'Cheetahmail\\Data\\Filters\\CreateResponse',
        'AuthHeader'                     => 'Cheetahmail\\Data\\Filters\\AuthHeader',
        'SetFields'                      => 'Cheetahmail\\Data\\Filters\\SetFields',
        'ArrayOfCriterion'               => 'Cheetahmail\\Data\\Filters\\ArrayOfCriterion',
        'Criterion'                      => 'Cheetahmail\\Data\\Filters\\Criterion',
        'SetFieldsResponse'              => 'Cheetahmail\\Data\\Filters\\SetFieldsResponse',
        'GetFields'                      => 'Cheetahmail\\Data\\Filters\\GetFields',
        'GetFieldsResponse'              => 'Cheetahmail\\Data\\Filters\\GetFieldsResponse',
        'List'                           => 'Cheetahmail\\Data\\Filters\\ListCustom',
        'ListResponse'                   => 'Cheetahmail\\Data\\Filters\\ListResponse',
        'ArrayOfString'                  => 'Cheetahmail\\Data\\Filters\\ArrayOfString',
        'CountFilter'                    => 'Cheetahmail\\Data\\Filters\\CountFilter',
        'CountFilterResponse'            => 'Cheetahmail\\Data\\Filters\\CountFilterResponse',
        'GetSubscriberForFilter'         => 'Cheetahmail\\Data\\Filters\\GetSubscriberForFilter',
        'GetSubscriberForFilterResponse' => 'Cheetahmail\\Data\\Filters\\GetSubscriberForFilterResponse',
        'ArrayOfArrayOfArrayOfString'    => 'Cheetahmail\\Data\\Filters\\ArrayOfArrayOfArrayOfString',
        'ArrayOfArrayOfString'           => 'Cheetahmail\\Data\\Filters\\ArrayOfArrayOfString',
    );

    /**
     * Filters constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/data/filters.wsdl';
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
     * Méthode pour créer un filtre par champs
     *
     * @param Create $parameters
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
        return $this->__soapCall('Create', array($parameters));
    }

    /**
     * Méthode pour définir les critères du filtre
     *
     * @param SetFields $parameters
     * @return SetFieldsResponse
     */
    public function SetFields(SetFields $parameters)
    {
        return $this->__soapCall('SetFields', array($parameters));
    }

    /**
     * Méthode permettant de sélectionner les critères du filtre
     *
     * @param GetFields $parameters
     * @return GetFieldsResponse
     */
    public function GetFields(GetFields $parameters)
    {
        return $this->__soapCall('GetFields', array($parameters));
    }

    /**
     * Méthode pour lister les filtres par champs
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Méthode pour compter le nombre d'abonnés sur cette cible
     *
     * @param CountFilter $parameters
     * @return CountFilterResponse
     */
    public function CountFilter(CountFilter $parameters)
    {
        return $this->__soapCall('CountFilter', array($parameters));
    }

    /**
     * Récupère la liste des abonnés pour une cible
     *
     * @param GetSubscriberForFilter $parameters
     * @return GetSubscriberForFilterResponse
     */
    public function GetSubscriberForFilter(GetSubscriberForFilter $parameters)
    {
        return $this->__soapCall('GetSubscriberForFilter', array($parameters));
    }
}
