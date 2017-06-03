<?php
namespace Cheetahmail\Campaigns\SmsUnit;

use Cheetahmail\AuthHeaderInterface;

class SMSUnit extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Create'                 => 'Cheetahmail\\Campaigns\\SmsUnit\\Create',
        'CreateUnitSMSCampParam' => 'Cheetahmail\\Campaigns\\SmsUnit\\CreateUnitSMSCampParam',
        'CreateResponse'         => 'Cheetahmail\\Campaigns\\SmsUnit\\CreateResponse',
        'AuthHeader'             => 'Cheetahmail\\Campaigns\\SmsUnit\\AuthHeader',
        'List'                   => 'Cheetahmail\\Campaigns\\SmsUnit\\ListCustom',
        'ListUnitSmsParam'       => 'Cheetahmail\\Campaigns\\SmsUnit\\ListUnitSmsParam',
        'ListResponse'           => 'Cheetahmail\\Campaigns\\SmsUnit\\ListResponse',
        'UnitSMSListResult'      => 'Cheetahmail\\Campaigns\\SmsUnit\\UnitSMSListResult',
        'ArrayOfUnitSMSList'     => 'Cheetahmail\\Campaigns\\SmsUnit\\ArrayOfUnitSMSList',
        'UnitSMSList'            => 'Cheetahmail\\Campaigns\\SmsUnit\\UnitSMSList',
        'Get'                    => 'Cheetahmail\\Campaigns\\SmsUnit\\Get',
        'GetResponse'            => 'Cheetahmail\\Campaigns\\SmsUnit\\GetResponse',
        'UnitSMSCampaign'        => 'Cheetahmail\\Campaigns\\SmsUnit\\UnitSMSCampaign',
        'Stats'                  => 'Cheetahmail\\Campaigns\\SmsUnit\\Stats',
        'StatsResponse'          => 'Cheetahmail\\Campaigns\\SmsUnit\\StatsResponse',
        'UnitSMSStats'           => 'Cheetahmail\\Campaigns\\SmsUnit\\UnitSMSStats',
        'Activate'               => 'Cheetahmail\\Campaigns\\SmsUnit\\Activate',
        'ActivateResponse'       => 'Cheetahmail\\Campaigns\\SmsUnit\\ActivateResponse',
        'Deactivate'             => 'Cheetahmail\\Campaigns\\SmsUnit\\Deactivate',
        'DeactivateResponse'     => 'Cheetahmail\\Campaigns\\SmsUnit\\DeactivateResponse',
        'Delete'                 => 'Cheetahmail\\Campaigns\\SmsUnit\\Delete',
        'DeleteResponse'         => 'Cheetahmail\\Campaigns\\SmsUnit\\DeleteResponse',
        'Update'                 => 'Cheetahmail\\Campaigns\\SmsUnit\\Update',
        'UpdateUnitSMSCampParam' => 'Cheetahmail\\Campaigns\\SmsUnit\\UpdateUnitSMSCampParam',
        'UpdateResponse'         => 'Cheetahmail\\Campaigns\\SmsUnit\\UpdateResponse',
        'Send'                   => 'Cheetahmail\\Campaigns\\SmsUnit\\Send',
        'SendUnitSMSParam'       => 'Cheetahmail\\Campaigns\\SmsUnit\\SendUnitSMSParam',
        'SendResponse'           => 'Cheetahmail\\Campaigns\\SmsUnit\\SendResponse',
    );

    /**
     * SMSUnit constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/campaigns/smsunit.wsdl';
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
     * Create a new Unit SMS Campaign
     *
     * @param Create $parameters
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
        return $this->__soapCall('Create', array($parameters));
    }

    /**
     * Get Unit SMS Campaign list
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Get detail about Unit SMS Campaign from its ID
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
        return $this->__soapCall('Get', array($parameters));
    }

    /**
     * Stats about SMS Unit Campaign
     *
     * @param Stats $parameters
     * @return StatsResponse
     */
    public function Stats(Stats $parameters)
    {
        return $this->__soapCall('Stats', array($parameters));
    }

    /**
     * Activate the SMS Unit and can send sms unit
     *
     * @param Activate $parameters
     * @return ActivateResponse
     */
    public function Activate(Activate $parameters)
    {
        return $this->__soapCall('Activate', array($parameters));
    }

    /**
     * Deactivate the SMS Unit and cannot send SMS
     *
     * @param Deactivate $parameters
     * @return DeactivateResponse
     */
    public function Deactivate(Deactivate $parameters)
    {
        return $this->__soapCall('Deactivate', array($parameters));
    }

    /**
     * Delete SMS Unit Campaign from its ID
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
        return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Update SMS Unit Campaign from its ID
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Send order to send Service SMS
     *
     * @param Send $parameters
     * @return SendResponse
     */
    public function Send(Send $parameters)
    {
        return $this->__soapCall('Send', array($parameters));
    }
}
