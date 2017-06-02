<?php
namespace Cheetahmail\Campaigns\Sms;

use Cheetahmail\AuthHeaderInterface;

class SMS extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Create'                  => 'Cheetahmail\\Campaigns\\Sms\\Create',
        'CreateSMSCampaignParams' => 'Cheetahmail\\Campaigns\\Sms\\CreateSMSCampaignParams',
        'CreateResponse'          => 'Cheetahmail\\Campaigns\\Sms\\CreateResponse',
        'AuthHeader'              => 'Cheetahmail\\Campaigns\\Sms\\AuthHeader',
        'Update'                  => 'Cheetahmail\\Campaigns\\Sms\\Update',
        'UpdateSMSCampaignParams' => 'Cheetahmail\\Campaigns\\Sms\\UpdateSMSCampaignParams',
        'UpdateResponse'          => 'Cheetahmail\\Campaigns\\Sms\\UpdateResponse',
        'Send'                    => 'Cheetahmail\\Campaigns\\Sms\\Send',
        'SendSmsCampaignParams'   => 'Cheetahmail\\Campaigns\\Sms\\SendSmsCampaignParams',
        'SendResponse'            => 'Cheetahmail\\Campaigns\\Sms\\SendResponse',
        'Pause'                   => 'Cheetahmail\\Campaigns\\Sms\\Pause',
        'PauseResponse'           => 'Cheetahmail\\Campaigns\\Sms\\PauseResponse',
        'Restart'                 => 'Cheetahmail\\Campaigns\\Sms\\Restart',
        'RestartResponse'         => 'Cheetahmail\\Campaigns\\Sms\\RestartResponse',
        'Stop'                    => 'Cheetahmail\\Campaigns\\Sms\\Stop',
        'StopResponse'            => 'Cheetahmail\\Campaigns\\Sms\\StopResponse',
        'Delete'                  => 'Cheetahmail\\Campaigns\\Sms\\Delete',
        'DeleteResponse'          => 'Cheetahmail\\Campaigns\\Sms\\DeleteResponse',
        'Get'                     => 'Cheetahmail\\Campaigns\\Sms\\Get',
        'GetResponse'             => 'Cheetahmail\\Campaigns\\Sms\\GetResponse',
        'SmsWS'                   => 'Cheetahmail\\Campaigns\\Sms\\SmsWS',
        'List'                    => 'Cheetahmail\\Campaigns\\Sms\\ListCustom',
        'ListResponse'            => 'Cheetahmail\\Campaigns\\Sms\\ListResponse',
        'ArrayOfCampaign'         => 'Cheetahmail\\Campaigns\\Sms\\ArrayOfCampaign',
        'Campaign'                => 'Cheetahmail\\Campaigns\\Sms\\Campaign',
    );

    /**
     * SMS constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/campaigns/sms.wsdl';
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
     * Method to create a SMS Campaign
     *
     * @param Create $parameters
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
        return $this->__soapCall('Create', array($parameters));
    }

    /**
     * Method to update a SMS Campaign
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Method to send a SMS campaign
     *
     * @param Send $parameters
     * @return SendResponse
     */
    public function Send(Send $parameters)
    {
        return $this->__soapCall('Send', array($parameters));
    }

    /**
     * Method to suspend a SMS Campaign
     *
     * @param Pause $parameters
     * @return PauseResponse
     */
    public function Pause(Pause $parameters)
    {
        return $this->__soapCall('Pause', array($parameters));
    }

    /**
     * Method to restart a SMS Campaign
     *
     * @param Restart $parameters
     * @return RestartResponse
     */
    public function Restart(Restart $parameters)
    {
        return $this->__soapCall('Restart', array($parameters));
    }

    /**
     * Method to stop a SMS Campaign
     *
     * @param Stop $parameters
     * @return StopResponse
     */
    public function Stop(Stop $parameters)
    {
        return $this->__soapCall('Stop', array($parameters));
    }

    /**
     * Method to delete a SMS Campaign
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
        return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Method to get a SMS campaign from its id
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
        return $this->__soapCall('Get', array($parameters));
    }

    /**
     * Listt all campaigns with a specific state
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }
}
