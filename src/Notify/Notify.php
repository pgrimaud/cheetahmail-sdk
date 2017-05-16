<?php
namespace Cheetahmail\Notify;

class Notify extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'List'             => 'Cheetahmail\\Notify\\ListCustom',
        'ListResponse'     => 'Cheetahmail\\Notify\\ListResponse',
        'ArrayOfNotifyGrp' => 'Cheetahmail\\Notify\\ArrayOfNotifyGrp',
        'NotifyGrp'        => 'Cheetahmail\\Notify\\NotifyGrp',
        'AuthHeader'       => 'Cheetahmail\\Notify\\AuthHeader',
        'Create'           => 'Cheetahmail\\Notify\\Create',
        'CreateResponse'   => 'Cheetahmail\\Notify\\CreateResponse',
        'Update'           => 'Cheetahmail\\Notify\\Update',
        'UpdateResponse'   => 'Cheetahmail\\Notify\\UpdateResponse',
        'Delete'           => 'Cheetahmail\\Notify\\Delete',
        'DeleteResponse'   => 'Cheetahmail\\Notify\\DeleteResponse',
    );

    /**
     * Notify constructor.
     * @param AuthHeader $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeader $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));

        $wsdl = $wsdl ?: __DIR__ . '/../../data/notify.wsdl';

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
     * Method to list notification groups
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Method to create a group for notifications
     *
     * @param Create $parameters
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
        return $this->__soapCall('Create', array($parameters));
    }

    /**
     * Method to update a group for notifications
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Method to delete a group
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
        return $this->__soapCall('Delete', array($parameters));
    }
}
