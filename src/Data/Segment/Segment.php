<?php
namespace Cheetahmail\Data\Segment;

use Cheetahmail\AuthHeaderInterface;

class Segment extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'CreateSegment'           => 'Cheetahmail\\Data\\Segment\\CreateSegment',
        'CreateSegmentResponse'   => 'Cheetahmail\\Data\\Segment\\CreateSegmentResponse',
        'AuthHeader'              => 'Cheetahmail\\Data\\Segment\\AuthHeader',
        'Update'                  => 'Cheetahmail\\Data\\Segment\\Update',
        'UpdateResponse'          => 'Cheetahmail\\Data\\Segment\\UpdateResponse',
        'DeleteSegment'           => 'Cheetahmail\\Data\\Segment\\DeleteSegment',
        'DeleteSegmentResponse'   => 'Cheetahmail\\Data\\Segment\\DeleteSegmentResponse',
        'ListSegment'             => 'Cheetahmail\\Data\\Segment\\ListSegment',
        'ListSegmentResponse'     => 'Cheetahmail\\Data\\Segment\\ListSegmentResponse',
        'ArrayOfString'           => 'Cheetahmail\\Data\\Segment\\ArrayOfString',
        'GetImportStatus'         => 'Cheetahmail\\Data\\Segment\\GetImportStatus',
        'GetImportStatusResponse' => 'Cheetahmail\\Data\\Segment\\GetImportStatusResponse',
    );

    /**
     * Segment constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/data/segment.wsdl';
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
     * Create a segment
     *
     * @param CreateSegment $parameters
     * @return CreateSegmentResponse
     */
    public function CreateSegment(CreateSegment $parameters)
    {
        return $this->__soapCall('CreateSegment', array($parameters));
    }

    /**
     * Update a segment
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Delete a segment
     *
     * @param DeleteSegment $parameters
     * @return DeleteSegmentResponse
     */
    public function DeleteSegment(DeleteSegment $parameters)
    {
        return $this->__soapCall('DeleteSegment', array($parameters));
    }

    /**
     * List of the segment
     *
     * @param ListSegment $parameters
     * @return ListSegmentResponse
     */
    public function ListSegment(ListSegment $parameters)
    {
        return $this->__soapCall('ListSegment', array($parameters));
    }

    /**
     * Get the importation status
     *
     * @param GetImportStatus $parameters
     * @return GetImportStatusResponse
     */
    public function GetImportStatus(GetImportStatus $parameters)
    {
        return $this->__soapCall('GetImportStatus', array($parameters));
    }
}
