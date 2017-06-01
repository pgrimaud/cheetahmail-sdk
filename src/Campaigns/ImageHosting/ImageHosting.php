<?php
namespace Cheetahmail\Campaigns\ImageHosting;

use Cheetahmail\AuthHeaderInterface;

class ImageHosting extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Add'                     => 'Cheetahmail\\Campaigns\\ImageHosting\\Add',
        'AddResponse'             => 'Cheetahmail\\Campaigns\\ImageHosting\\AddResponse',
        'AuthHeader'              => 'Cheetahmail\\Campaigns\\ImageHosting\\AuthHeader',
        'Update'                  => 'Cheetahmail\\Campaigns\\ImageHosting\\Update',
        'UpdateResponse'          => 'Cheetahmail\\Campaigns\\ImageHosting\\UpdateResponse',
        'Rename'                  => 'Cheetahmail\\Campaigns\\ImageHosting\\Rename',
        'RenameResponse'          => 'Cheetahmail\\Campaigns\\ImageHosting\\RenameResponse',
        'Delete'                  => 'Cheetahmail\\Campaigns\\ImageHosting\\Delete',
        'DeleteResponse'          => 'Cheetahmail\\Campaigns\\ImageHosting\\DeleteResponse',
        'List'                    => 'Cheetahmail\\Campaigns\\ImageHosting\\ListCustom',
        'ListResponse'            => 'Cheetahmail\\Campaigns\\ImageHosting\\ListResponse',
        'ArrayOfString'           => 'Cheetahmail\\Campaigns\\ImageHosting\\ArrayOfString',
        'AddDirectory'            => 'Cheetahmail\\Campaigns\\ImageHosting\\AddDirectory',
        'AddDirectoryResponse'    => 'Cheetahmail\\Campaigns\\ImageHosting\\AddDirectoryResponse',
        'RenameDirectory'         => 'Cheetahmail\\Campaigns\\ImageHosting\\RenameDirectory',
        'RenameDirectoryResponse' => 'Cheetahmail\\Campaigns\\ImageHosting\\RenameDirectoryResponse',
        'DeleteDirectory'         => 'Cheetahmail\\Campaigns\\ImageHosting\\DeleteDirectory',
        'DeleteDirectoryResponse' => 'Cheetahmail\\Campaigns\\ImageHosting\\DeleteDirectoryResponse',
        'ListDirectory'           => 'Cheetahmail\\Campaigns\\ImageHosting\\ListDirectory',
        'ListDirectoryResponse'   => 'Cheetahmail\\Campaigns\\ImageHosting\\ListDirectoryResponse',
    );

    /**
     * ImageHosting constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/campaigns/campaigns.wsdl';
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
     * Method to add an image
     *
     * @param Add $parameters
     * @return AddResponse
     */
    public function Add(Add $parameters)
    {
        return $this->__soapCall('Add', array($parameters));
    }

    /**
     * Method to update an image (overwrite)
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Method to rename an image
     *
     * @param Rename $parameters
     * @return RenameResponse
     */
    public function Rename(Rename $parameters)
    {
        return $this->__soapCall('Rename', array($parameters));
    }

    /**
     * Method to delete an image
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
        return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Method to list all hosted images
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Method to Add a directory
     *
     * @param AddDirectory $parameters
     * @return AddDirectoryResponse
     */
    public function AddDirectory(AddDirectory $parameters)
    {
        return $this->__soapCall('AddDirectory', array($parameters));
    }

    /**
     * Method to rename a directory
     *
     * @param RenameDirectory $parameters
     * @return RenameDirectoryResponse
     */
    public function RenameDirectory(RenameDirectory $parameters)
    {
        return $this->__soapCall('RenameDirectory', array($parameters));
    }

    /**
     * Method to delete a directory and its content
     *
     * @param DeleteDirectory $parameters
     * @return DeleteDirectoryResponse
     */
    public function DeleteDirectory(DeleteDirectory $parameters)
    {
        return $this->__soapCall('DeleteDirectory', array($parameters));
    }

    /**
     * Method to list directory path on the server
     *
     * @param ListDirectory $parameters
     * @return ListDirectoryResponse
     */
    public function ListDirectory(ListDirectory $parameters)
    {
        return $this->__soapCall('ListDirectory', array($parameters));
    }
}
