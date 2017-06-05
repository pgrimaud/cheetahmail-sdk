<?php
namespace Cheetahmail\Data\Target;

use Cheetahmail\AuthHeaderInterface;

class Target extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'List'                      => 'Cheetahmail\\Data\\Target\\ListCustom',
        'ListResponse'              => 'Cheetahmail\\Data\\Target\\ListResponse',
        'ArrayOfTargetEntityReturn' => 'Cheetahmail\\Data\\Target\\ArrayOfTargetEntityReturn',
        'TargetEntityReturn'        => 'Cheetahmail\\Data\\Target\\TargetEntityReturn',
        'AuthHeader'                => 'Cheetahmail\\Data\\Target\\AuthHeader',
        'Count'                     => 'Cheetahmail\\Data\\Target\\Count',
        'CountResponse'             => 'Cheetahmail\\Data\\Target\\CountResponse',
        'Rename'                    => 'Cheetahmail\\Data\\Target\\Rename',
        'RenameResponse'            => 'Cheetahmail\\Data\\Target\\RenameResponse',
    );

    /**
     * Target constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/data/target.wsdl';
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
     * List of target: description and id
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Count target : show number of users in target
     *
     * @param Count $parameters
     * @return CountResponse
     */
    public function Count(Count $parameters)
    {
        return $this->__soapCall('Count', array($parameters));
    }

    /**
     * Change Description and confidentiality
     *
     * @param Rename $parameters
     * @return RenameResponse
     */
    public function Rename(Rename $parameters)
    {
        return $this->__soapCall('Rename', array($parameters));
    }
}
