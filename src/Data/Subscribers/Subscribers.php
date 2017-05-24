<?php
namespace Cheetahmail\Data\Subscribers;

use Cheetahmail\AuthHeaderInterface;

class Subscribers extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Add'                            => 'Cheetahmail\\Data\\Subscribers\\Add',
        'AddResponse'                    => 'Cheetahmail\\Data\\Subscribers\\AddResponse',
        'AuthHeader'                     => 'Cheetahmail\\Data\\Subscribers\\AuthHeader',
        'Update'                         => 'Cheetahmail\\Data\\Subscribers\\Update',
        'ArrayOfArrayOfString'           => 'Cheetahmail\\Data\\Subscribers\\ArrayOfArrayOfString',
        'ArrayOfString'                  => 'Cheetahmail\\Data\\Subscribers\\ArrayOfString',
        'UpdateResponse'                 => 'Cheetahmail\\Data\\Subscribers\\UpdateResponse',
        'Delete'                         => 'Cheetahmail\\Data\\Subscribers\\Delete',
        'DeleteResponse'                 => 'Cheetahmail\\Data\\Subscribers\\DeleteResponse',
        'Unsubscribe'                    => 'Cheetahmail\\Data\\Subscribers\\Unsubscribe',
        'UnsubscribeResponse'            => 'Cheetahmail\\Data\\Subscribers\\UnsubscribeResponse',
        'UnsubscribeByTisId'             => 'Cheetahmail\\Data\\Subscribers\\UnsubscribeByTisId',
        'UnsubscribeByTisIdResponse'     => 'Cheetahmail\\Data\\Subscribers\\UnsubscribeByTisIdResponse',
        'AddFriendByTisId'               => 'Cheetahmail\\Data\\Subscribers\\AddFriendByTisId',
        'AddFriendByTisIdResponse'       => 'Cheetahmail\\Data\\Subscribers\\AddFriendByTisIdResponse',
        'Get'                            => 'Cheetahmail\\Data\\Subscribers\\Get',
        'GetResponse'                    => 'Cheetahmail\\Data\\Subscribers\\GetResponse',
        'GetFieldById'                   => 'Cheetahmail\\Data\\Subscribers\\GetFieldById',
        'GetFieldByIdResponse'           => 'Cheetahmail\\Data\\Subscribers\\GetFieldByIdResponse',
        'GetByTisId'                     => 'Cheetahmail\\Data\\Subscribers\\GetByTisId',
        'GetByTisIdResponse'             => 'Cheetahmail\\Data\\Subscribers\\GetByTisIdResponse',
        'GetByEmail'                     => 'Cheetahmail\\Data\\Subscribers\\GetByEmail',
        'GetByEmailResponse'             => 'Cheetahmail\\Data\\Subscribers\\GetByEmailResponse',
        'GetIdByEmail'                   => 'Cheetahmail\\Data\\Subscribers\\GetIdByEmail',
        'GetIdByEmailResponse'           => 'Cheetahmail\\Data\\Subscribers\\GetIdByEmailResponse',
        'Find'                           => 'Cheetahmail\\Data\\Subscribers\\Find',
        'FindResponse'                   => 'Cheetahmail\\Data\\Subscribers\\FindResponse',
        'ArrayOfInt'                     => 'Cheetahmail\\Data\\Subscribers\\ArrayOfInt',
        'GetFieldsDefinition'            => 'Cheetahmail\\Data\\Subscribers\\GetFieldsDefinition',
        'GetFieldsDefinitionResponse'    => 'Cheetahmail\\Data\\Subscribers\\GetFieldsDefinitionResponse',
        'ArrayOfFieldDefinition'         => 'Cheetahmail\\Data\\Subscribers\\ArrayOfFieldDefinition',
        'FieldDefinition'                => 'Cheetahmail\\Data\\Subscribers\\FieldDefinition',
        'GetSubscriberForFilter'         => 'Cheetahmail\\Data\\Subscribers\\GetSubscriberForFilter',
        'GetSubscriberForFilterResponse' => 'Cheetahmail\\Data\\Subscribers\\GetSubscriberForFilterResponse',
        'ArrayOfArrayOfArrayOfString'    => 'Cheetahmail\\Data\\Subscribers\\ArrayOfArrayOfArrayOfString',
        'CheckPhoneNumber'               => 'Cheetahmail\\Data\\Subscribers\\CheckPhoneNumber',
        'CheckPhoneNumberResponse'       => 'Cheetahmail\\Data\\Subscribers\\CheckPhoneNumberResponse',
    );

    /**
     * Subscribers constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/data/subscribers.wsdl';
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
     * Add a Subscriber
     *
     * @param Add $parameters
     * @return AddResponse
     */
    public function Add(Add $parameters)
    {
        return $this->__soapCall('Add', array($parameters));
    }

    /**
     * Updates a subscriber's information
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Deletes a subscriber
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
        return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Unsubscribes a subscriber
     *
     * @param Unsubscribe $parameters
     * @return UnsubscribeResponse
     */
    public function Unsubscribe(Unsubscribe $parameters)
    {
        return $this->__soapCall('Unsubscribe', array($parameters));
    }

    /**
     * Unsubscribe a subscriber by TisId
     *
     * @param UnsubscribeByTisId $parameters
     * @return UnsubscribeByTisIdResponse
     */
    public function UnsubscribeByTisId(UnsubscribeByTisId $parameters)
    {
        return $this->__soapCall('UnsubscribeByTisId', array($parameters));
    }

    /**
     * Make a subscriber to godchild by TisId
     *
     * @param AddFriendByTisId $parameters
     * @return AddFriendByTisIdResponse
     */
    public function AddFriendByTisId(AddFriendByTisId $parameters)
    {
        return $this->__soapCall('AddFriendByTisId', array($parameters));
    }

    /**
     * Retrieves a subscriber's information
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
        return $this->__soapCall('Get', array($parameters));
    }

    /**
     * Get the content of a field for a subscriber
     *
     * @param GetFieldById $parameters
     * @return GetFieldByIdResponse
     */
    public function GetFieldById(GetFieldById $parameters)
    {
        return $this->__soapCall('GetFieldById', array($parameters));
    }

    /**
     * Retrieves a subscriber's information
     *
     * @param GetByTisId $parameters
     * @return GetByTisIdResponse
     */
    public function GetByTisId(GetByTisId $parameters)
    {
        return $this->__soapCall('GetByTisId', array($parameters));
    }

    /**
     * @param GetByEmail $parameters
     * @return GetByEmailResponse
     */
    public function GetByEmail(GetByEmail $parameters)
    {
        return $this->__soapCall('GetByEmail', array($parameters));
    }

    /**
     * Get subscribers Id from Email
     *
     * @param GetIdByEmail $parameters
     * @return GetIdByEmailResponse
     */
    public function GetIdByEmail(GetIdByEmail $parameters)
    {
        return $this->__soapCall('GetIdByEmail', array($parameters));
    }

    /**
     * Retrieves a list of subscribers given a list of criteria
     *
     * @param Find $parameters
     * @return FindResponse
     */
    public function Find(Find $parameters)
    {
        return $this->__soapCall('Find', array($parameters));
    }

    /**
     * Retrieves the definition of all the fields
     *
     * @param GetFieldsDefinition $parameters
     * @return GetFieldsDefinitionResponse
     */
    public function GetFieldsDefinition(GetFieldsDefinition $parameters)
    {
        return $this->__soapCall('GetFieldsDefinition', array($parameters));
    }

    /**
     * Retrieves a list of subscribers given  a filter ID
     *
     * @param GetSubscriberForFilter $parameters
     * @return GetSubscriberForFilterResponse
     */
    public function GetSubscriberForFilter(GetSubscriberForFilter $parameters)
    {
        return $this->__soapCall('GetSubscriberForFilter', array($parameters));
    }

    /**
     * Check the syntax of a subscriber's phone number
     *
     * @param CheckPhoneNumber $parameters
     * @return CheckPhoneNumberResponse
     */
    public function CheckPhoneNumber(CheckPhoneNumber $parameters)
    {
        return $this->__soapCall('CheckPhoneNumber', array($parameters));
    }
}
