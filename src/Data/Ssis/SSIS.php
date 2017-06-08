<?php
namespace Cheetahmail\Data\Ssis;

use Cheetahmail\AuthHeaderInterface;

class SSIS extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'CreateImportMapping'          => 'Cheetahmail\\Data\\Ssis\\CreateImportMapping',
        'MappingDesc'                  => 'Cheetahmail\\Data\\Ssis\\MappingDesc',
        'MappingFile'                  => 'Cheetahmail\\Data\\Ssis\\MappingFile',
        'CreateImportMappingResponse'  => 'Cheetahmail\\Data\\Ssis\\CreateImportMappingResponse',
        'AuthHeader'                   => 'Cheetahmail\\Data\\Ssis\\AuthHeader',
        'SetFields'                    => 'Cheetahmail\\Data\\Ssis\\SetFields',
        'ArrayOfLinkedfied'            => 'Cheetahmail\\Data\\Ssis\\ArrayOfLinkedfied',
        'Linkedfied'                   => 'Cheetahmail\\Data\\Ssis\\Linkedfied',
        'SetFieldsResponse'            => 'Cheetahmail\\Data\\Ssis\\SetFieldsResponse',
        'GetMappingDesc'               => 'Cheetahmail\\Data\\Ssis\\GetMappingDesc',
        'GetMappingDescResponse'       => 'Cheetahmail\\Data\\Ssis\\GetMappingDescResponse',
        'GetFileMapping'               => 'Cheetahmail\\Data\\Ssis\\GetFileMapping',
        'GetFileMappingResponse'       => 'Cheetahmail\\Data\\Ssis\\GetFileMappingResponse',
        'GetlistMapping'               => 'Cheetahmail\\Data\\Ssis\\GetlistMapping',
        'GetlistMappingResponse'       => 'Cheetahmail\\Data\\Ssis\\GetlistMappingResponse',
        'ArrayOfMappingDesc'           => 'Cheetahmail\\Data\\Ssis\\ArrayOfMappingDesc',
        'GetFileColumn'                => 'Cheetahmail\\Data\\Ssis\\GetFileColumn',
        'GetFileColumnResponse'        => 'Cheetahmail\\Data\\Ssis\\GetFileColumnResponse',
        'ArrayOfString'                => 'Cheetahmail\\Data\\Ssis\\ArrayOfString',
        'UpdateMapping'                => 'Cheetahmail\\Data\\Ssis\\UpdateMapping',
        'UpdateMappingResponse'        => 'Cheetahmail\\Data\\Ssis\\UpdateMappingResponse',
        'UpdateInfoMapping'            => 'Cheetahmail\\Data\\Ssis\\UpdateInfoMapping',
        'UpdateInfoMappingResponse'    => 'Cheetahmail\\Data\\Ssis\\UpdateInfoMappingResponse',
        'DropMapping'                  => 'Cheetahmail\\Data\\Ssis\\DropMapping',
        'DropMappingResponse'          => 'Cheetahmail\\Data\\Ssis\\DropMappingResponse',
        'Save'                         => 'Cheetahmail\\Data\\Ssis\\Save',
        'SaveResponse'                 => 'Cheetahmail\\Data\\Ssis\\SaveResponse',
        'Start'                        => 'Cheetahmail\\Data\\Ssis\\Start',
        'StartResponse'                => 'Cheetahmail\\Data\\Ssis\\StartResponse',
        'DeletePackage'                => 'Cheetahmail\\Data\\Ssis\\DeletePackage',
        'DeletePackageResponse'        => 'Cheetahmail\\Data\\Ssis\\DeletePackageResponse',
        'CreateScheduler'              => 'Cheetahmail\\Data\\Ssis\\CreateScheduler',
        'ArrayOfInt'                   => 'Cheetahmail\\Data\\Ssis\\ArrayOfInt',
        'CreateSchedulerResponse'      => 'Cheetahmail\\Data\\Ssis\\CreateSchedulerResponse',
        'GetScheduler'                 => 'Cheetahmail\\Data\\Ssis\\GetScheduler',
        'GetSchedulerResponse'         => 'Cheetahmail\\Data\\Ssis\\GetSchedulerResponse',
        'SchedulerDesc'                => 'Cheetahmail\\Data\\Ssis\\SchedulerDesc',
        'ListSchedulers'               => 'Cheetahmail\\Data\\Ssis\\ListSchedulers',
        'ListSchedulersResponse'       => 'Cheetahmail\\Data\\Ssis\\ListSchedulersResponse',
        'ArrayOfSchedulerDesc'         => 'Cheetahmail\\Data\\Ssis\\ArrayOfSchedulerDesc',
        'DeleteScheduler'              => 'Cheetahmail\\Data\\Ssis\\DeleteScheduler',
        'DeleteSchedulerResponse'      => 'Cheetahmail\\Data\\Ssis\\DeleteSchedulerResponse',
        'Updatescheduler'              => 'Cheetahmail\\Data\\Ssis\\Updatescheduler',
        'UpdateschedulerResponse'      => 'Cheetahmail\\Data\\Ssis\\UpdateschedulerResponse',
        'GetLastMappingStatus'         => 'Cheetahmail\\Data\\Ssis\\GetLastMappingStatus',
        'GetLastMappingStatusResponse' => 'Cheetahmail\\Data\\Ssis\\GetLastMappingStatusResponse',
        'History'                      => 'Cheetahmail\\Data\\Ssis\\History',
        'HistoryResponse'              => 'Cheetahmail\\Data\\Ssis\\HistoryResponse',
        'ArrayOfHistoryDesc'           => 'Cheetahmail\\Data\\Ssis\\ArrayOfHistoryDesc',
        'HistoryDesc'                  => 'Cheetahmail\\Data\\Ssis\\HistoryDesc',
    );

    /**
     * SSIS constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/data/ssis.wsdl';
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
     * Create a mapping
     *
     * @param CreateImportMapping $parameters
     * @return CreateImportMappingResponse
     */
    public function CreateImportMapping(CreateImportMapping $parameters)
    {
        return $this->__soapCall('CreateImportMapping', array($parameters));
    }

    /**
     * Set Fields
     *
     * @param SetFields $parameters
     * @return SetFieldsResponse
     */
    public function SetFields(SetFields $parameters)
    {
        return $this->__soapCall('SetFields', array($parameters));
    }

    /**
     * Get Mapping by Id
     *
     * @param GetMappingDesc $parameters
     * @return GetMappingDescResponse
     */
    public function GetMappingDesc(GetMappingDesc $parameters)
    {
        return $this->__soapCall('GetMappingDesc', array($parameters));
    }

    /**
     * Get File Mapping
     *
     * @param GetFileMapping $parameters
     * @return GetFileMappingResponse
     */
    public function GetFileMapping(GetFileMapping $parameters)
    {
        return $this->__soapCall('GetFileMapping', array($parameters));
    }

    /**
     * Get File Mapping
     *
     * @param GetlistMapping $parameters
     * @return GetlistMappingResponse
     */
    public function GetlistMapping(GetlistMapping $parameters)
    {
        return $this->__soapCall('GetlistMapping', array($parameters));
    }

    /**
     * Get File Column
     *
     * @param GetFileColumn $parameters
     * @return GetFileColumnResponse
     */
    public function GetFileColumn(GetFileColumn $parameters)
    {
        return $this->__soapCall('GetFileColumn', array($parameters));
    }

    /**
     * Update File Mapping
     *
     * @param UpdateMapping $parameters
     * @return UpdateMappingResponse
     */
    public function UpdateMapping(UpdateMapping $parameters)
    {
        return $this->__soapCall('UpdateMapping', array($parameters));
    }

    /**
     * Update generals informations of a Mapping
     *
     * @param UpdateInfoMapping $parameters
     * @return UpdateInfoMappingResponse
     */
    public function UpdateInfoMapping(UpdateInfoMapping $parameters)
    {
        return $this->__soapCall('UpdateInfoMapping', array($parameters));
    }

    /**
     * Drop Mapping
     *
     * @param DropMapping $parameters
     * @return DropMappingResponse
     */
    public function DropMapping(DropMapping $parameters)
    {
        return $this->__soapCall('DropMapping', array($parameters));
    }

    /**
     * Create and Save the SQL page ON SSIS For shedular
     *
     * @param Save $parameters
     * @return SaveResponse
     */
    public function Save(Save $parameters)
    {
        return $this->__soapCall('Save', array($parameters));
    }

    /**
     * Create,Save and Execute the SSIS package
     *
     * @param Start $parameters
     * @return StartResponse
     */
    public function Start(Start $parameters)
    {
        return $this->__soapCall('Start', array($parameters));
    }

    /**
     * Delete a SSIS job and package
     *
     * @param DeletePackage $parameters
     * @return DeletePackageResponse
     */
    public function DeletePackage(DeletePackage $parameters)
    {
        return $this->__soapCall('DeletePackage', array($parameters));
    }

    /**
     * Create a SSIS scheduler
     *
     * @param CreateScheduler $parameters
     * @return CreateSchedulerResponse
     */
    public function CreateScheduler(CreateScheduler $parameters)
    {
        return $this->__soapCall('CreateScheduler', array($parameters));
    }

    /**
     * Getscheduler
     *
     * @param GetScheduler $parameters
     * @return GetSchedulerResponse
     */
    public function GetScheduler(GetScheduler $parameters)
    {
        return $this->__soapCall('GetScheduler', array($parameters));
    }

    /**
     * List of scheduler
     *
     * @param ListSchedulers $parameters
     * @return ListSchedulersResponse
     */
    public function ListSchedulers(ListSchedulers $parameters)
    {
        return $this->__soapCall('ListSchedulers', array($parameters));
    }

    /**
     * Delete a SSIS scheduler
     *
     * @param DeleteScheduler $parameters
     * @return DeleteSchedulerResponse
     */
    public function DeleteScheduler(DeleteScheduler $parameters)
    {
        return $this->__soapCall('DeleteScheduler', array($parameters));
    }

    /**
     * Update a SSIS scheduler
     *
     * @param Updatescheduler $parameters
     * @return UpdateschedulerResponse
     */
    public function Updatescheduler(Updatescheduler $parameters)
    {
        return $this->__soapCall('Updatescheduler', array($parameters));
    }

    /**
     * Get the last Status of a Mapping
     *
     * @param GetLastMappingStatus $parameters
     * @return GetLastMappingStatusResponse
     */
    public function GetLastMappingStatus(GetLastMappingStatus $parameters)
    {
        return $this->__soapCall('GetLastMappingStatus', array($parameters));
    }

    /**
     * History of execution scheduler
     *
     * @param History $parameters
     * @return HistoryResponse
     */
    public function History(History $parameters)
    {
        return $this->__soapCall('History', array($parameters));
    }
}
