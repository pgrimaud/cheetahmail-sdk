<?php
namespace Cheetahmail\Campaigns\Content;

use Cheetahmail\AuthHeaderInterface;

class Content extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'EMSContainerSave'                       => 'Cheetahmail\\Campaigns\\Content\\EMSContainerSave',
        'EMSContainerSaveResponse'               => 'Cheetahmail\\Campaigns\\Content\\EMSContainerSaveResponse',
        'AuthHeader'                             => 'Cheetahmail\\Campaigns\\Content\\AuthHeader',
        'EMSContainerUpdate'                     => 'Cheetahmail\\Campaigns\\Content\\EMSContainerUpdate',
        'EMSContainerUpdateResponse'             => 'Cheetahmail\\Campaigns\\Content\\EMSContainerUpdateResponse',
        'EMSContainerDelete'                     => 'Cheetahmail\\Campaigns\\Content\\EMSContainerDelete',
        'EMSContainerDeleteResponse'             => 'Cheetahmail\\Campaigns\\Content\\EMSContainerDeleteResponse',
        'GetContainerID'                         => 'Cheetahmail\\Campaigns\\Content\\GetContainerID',
        'GetContainerIDResponse'                 => 'Cheetahmail\\Campaigns\\Content\\GetContainerIDResponse',
        'ArrayOfInt'                             => 'Cheetahmail\\Campaigns\\Content\\ArrayOfInt',
        'GetContainer'                           => 'Cheetahmail\\Campaigns\\Content\\GetContainer',
        'GetContainerResponse'                   => 'Cheetahmail\\Campaigns\\Content\\GetContainerResponse',
        'ArrayOfArrayOfString'                   => 'Cheetahmail\\Campaigns\\Content\\ArrayOfArrayOfString',
        'ArrayOfString'                          => 'Cheetahmail\\Campaigns\\Content\\ArrayOfString',
        'RemoveCacheContent'                     => 'Cheetahmail\\Campaigns\\Content\\RemoveCacheContent',
        'RemoveCacheContentResponse'             => 'Cheetahmail\\Campaigns\\Content\\RemoveCacheContentResponse',
        'RemoveCacheContentForContainer'         => 'Cheetahmail\\Campaigns\\Content\\RemoveCacheContentForContainer',
        'RemoveCacheContentForContainerResponse' => 'Cheetahmail\\Campaigns\\Content\\RemoveCacheContentForContainerResponse',
        'EMSContentSave'                         => 'Cheetahmail\\Campaigns\\Content\\EMSContentSave',
        'EMSContentSaveResponse'                 => 'Cheetahmail\\Campaigns\\Content\\EMSContentSaveResponse',
        'EMSContentUpdate'                       => 'Cheetahmail\\Campaigns\\Content\\EMSContentUpdate',
        'EMSContentUpdateResponse'               => 'Cheetahmail\\Campaigns\\Content\\EMSContentUpdateResponse',
        'EMSContentDelete'                       => 'Cheetahmail\\Campaigns\\Content\\EMSContentDelete',
        'EMSContentDeleteResponse'               => 'Cheetahmail\\Campaigns\\Content\\EMSContentDeleteResponse',
        'GetReferenceKeyByContainer'             => 'Cheetahmail\\Campaigns\\Content\\GetReferenceKeyByContainer',
        'GetReferenceKeyByContainerResponse'     => 'Cheetahmail\\Campaigns\\Content\\GetReferenceKeyByContainerResponse',
        'GetContent'                             => 'Cheetahmail\\Campaigns\\Content\\GetContent',
        'GetContentResponse'                     => 'Cheetahmail\\Campaigns\\Content\\GetContentResponse',
        'CorrespondanceMTOSave'                  => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceMTOSave',
        'CorrespondanceMTOSaveResponse'          => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceMTOSaveResponse',
        'CorrespondanceMTOUpdate'                => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceMTOUpdate',
        'CorrespondanceMTOUpdateResponse'        => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceMTOUpdateResponse',
        'CorrespondanceMTODelete'                => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceMTODelete',
        'CorrespondanceMTODeleteResponse'        => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceMTODeleteResponse',
        'GetCorrespondanceMTO'                   => 'Cheetahmail\\Campaigns\\Content\\GetCorrespondanceMTO',
        'GetCorrespondanceMTOResponse'           => 'Cheetahmail\\Campaigns\\Content\\GetCorrespondanceMTOResponse',
        'GetKeyMTO'                              => 'Cheetahmail\\Campaigns\\Content\\GetKeyMTO',
        'GetKeyMTOResponse'                      => 'Cheetahmail\\Campaigns\\Content\\GetKeyMTOResponse',
        'CorrespondanceOTMSave'                  => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceOTMSave',
        'CorrespondanceOTMSaveResponse'          => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceOTMSaveResponse',
        'CorrespondanceOTMUpdate'                => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceOTMUpdate',
        'CorrespondanceOTMUpdateResponse'        => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceOTMUpdateResponse',
        'CorrespondanceOTMDelete'                => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceOTMDelete',
        'CorrespondanceOTMDeleteResponse'        => 'Cheetahmail\\Campaigns\\Content\\CorrespondanceOTMDeleteResponse',
        'GetCorrespondanceOTM'                   => 'Cheetahmail\\Campaigns\\Content\\GetCorrespondanceOTM',
        'GetCorrespondanceOTMResponse'           => 'Cheetahmail\\Campaigns\\Content\\GetCorrespondanceOTMResponse',
        'GetKeyOTM'                              => 'Cheetahmail\\Campaigns\\Content\\GetKeyOTM',
        'GetKeyOTMResponse'                      => 'Cheetahmail\\Campaigns\\Content\\GetKeyOTMResponse',
        'TrackLinkAndSave'                       => 'Cheetahmail\\Campaigns\\Content\\TrackLinkAndSave',
        'TrackLinkAndSaveResponse'               => 'Cheetahmail\\Campaigns\\Content\\TrackLinkAndSaveResponse',
    );

    /**
     * Content constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/campaigns/content.wsdl';
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
     * EMSContainerSave creates a container. Return : container id.
     *
     * @param EMSContainerSave $parameters
     * @return EMSContainerSaveResponse
     */
    public function EMSContainerSave(EMSContainerSave $parameters)
    {
        return $this->__soapCall('EMSContainerSave', array($parameters));
    }

    /**
     * EMSContainerUpdate updates information about a container.
     *
     * @param EMSContainerUpdate $parameters
     * @return EMSContainerUpdateResponse
     */
    public function EMSContainerUpdate(EMSContainerUpdate $parameters)
    {
        return $this->__soapCall('EMSContainerUpdate', array($parameters));
    }

    /**
     * EMSContainerDelete delete information about a container.
     *
     * @param EMSContainerDelete $parameters
     * @return EMSContainerDeleteResponse
     */
    public function EMSContainerDelete(EMSContainerDelete $parameters)
    {
        return $this->__soapCall('EMSContainerDelete', array($parameters));
    }

    /**
     * GetContainerID provides a list of all containers id.
     *
     * @param GetContainerID $parameters
     * @return GetContainerIDResponse
     */
    public function GetContainerID(GetContainerID $parameters)
    {
        return $this->__soapCall('GetContainerID', array($parameters));
    }

    /**
     * GetContainer provides information about a container.
     *
     * @param GetContainer $parameters
     * @return GetContainerResponse
     */
    public function GetContainer(GetContainer $parameters)
    {
        return $this->__soapCall('GetContainer', array($parameters));
    }

    /**
     * RemoveCacheContent flushes cache of all contents.
     *
     * @param RemoveCacheContent $parameters
     * @return RemoveCacheContentResponse
     */
    public function RemoveCacheContent(RemoveCacheContent $parameters)
    {
        return $this->__soapCall('RemoveCacheContent', array($parameters));
    }

    /**
     * RemoveCacheContentForContainer flushes cache of all contents for a container.
     *
     * @param RemoveCacheContentForContainer $parameters
     * @return RemoveCacheContentForContainerResponse
     */
    public function RemoveCacheContentForContainer(RemoveCacheContentForContainer $parameters)
    {
        return $this->__soapCall('RemoveCacheContentForContainer', array($parameters));
    }

    /**
     * EMSContentSave creates a content.
     *
     * @param EMSContentSave $parameters
     * @return EMSContentSaveResponse
     */
    public function EMSContentSave(EMSContentSave $parameters)
    {
        return $this->__soapCall('EMSContentSave', array($parameters));
    }

    /**
     * EMSContentUpdate updates information about a content.
     *
     * @param EMSContentUpdate $parameters
     * @return EMSContentUpdateResponse
     */
    public function EMSContentUpdate(EMSContentUpdate $parameters)
    {
        return $this->__soapCall('EMSContentUpdate', array($parameters));
    }

    /**
     * EMSContentDelete delete information about a content.
     *
     * @param EMSContentDelete $parameters
     * @return EMSContentDeleteResponse
     */
    public function EMSContentDelete(EMSContentDelete $parameters)
    {
        return $this->__soapCall('EMSContentDelete', array($parameters));
    }

    /**
     * GetReferenceKeyByContainer provides a list of reference keys for a container.
     *
     * @param GetReferenceKeyByContainer $parameters
     * @return GetReferenceKeyByContainerResponse
     */
    public function GetReferenceKeyByContainer(GetReferenceKeyByContainer $parameters)
    {
        return $this->__soapCall('GetReferenceKeyByContainer', array($parameters));
    }

    /**
     * GetContent provides information about a content.
     *
     * @param GetContent $parameters
     * @return GetContentResponse
     */
    public function GetContent(GetContent $parameters)
    {
        return $this->__soapCall('GetContent', array($parameters));
    }

    /**
     * CorrespondanceMTOSave creates a MTO (Many To One) relation.
     *
     * @param CorrespondanceMTOSave $parameters
     * @return CorrespondanceMTOSaveResponse
     */
    public function CorrespondanceMTOSave(CorrespondanceMTOSave $parameters)
    {
        return $this->__soapCall('CorrespondanceMTOSave', array($parameters));
    }

    /**
     * CorrespondanceMTOUpdate updates an existing MTO relation.
     *
     * @param CorrespondanceMTOUpdate $parameters
     * @return CorrespondanceMTOUpdateResponse
     */
    public function CorrespondanceMTOUpdate(CorrespondanceMTOUpdate $parameters)
    {
        return $this->__soapCall('CorrespondanceMTOUpdate', array($parameters));
    }

    /**
     * CorrespondanceMTODelete deletes an existing MTO relation.
     *
     * @param CorrespondanceMTODelete $parameters
     * @return CorrespondanceMTODeleteResponse
     */
    public function CorrespondanceMTODelete(CorrespondanceMTODelete $parameters)
    {
        return $this->__soapCall('CorrespondanceMTODelete', array($parameters));
    }

    /**
     * GetCorrespondanceMTO provides a list of MTO relations
     *
     * @param GetCorrespondanceMTO $parameters
     * @return GetCorrespondanceMTOResponse
     */
    public function GetCorrespondanceMTO(GetCorrespondanceMTO $parameters)
    {
        return $this->__soapCall('GetCorrespondanceMTO', array($parameters));
    }

    /**
     * GetKeyMTO provides a list of Key MTO
     *
     * @param GetKeyMTO $parameters
     * @return GetKeyMTOResponse
     */
    public function GetKeyMTO(GetKeyMTO $parameters)
    {
        return $this->__soapCall('GetKeyMTO', array($parameters));
    }

    /**
     * CorrespondanceOTMSave creates an OTM (One To Many) relation.
     *
     * @param CorrespondanceOTMSave $parameters
     * @return CorrespondanceOTMSaveResponse
     */
    public function CorrespondanceOTMSave(CorrespondanceOTMSave $parameters)
    {
        return $this->__soapCall('CorrespondanceOTMSave', array($parameters));
    }

    /**
     * CorrespondanceOTMUpdate updates an existing OTM relation.
     *
     * @param CorrespondanceOTMUpdate $parameters
     * @return CorrespondanceOTMUpdateResponse
     */
    public function CorrespondanceOTMUpdate(CorrespondanceOTMUpdate $parameters)
    {
        return $this->__soapCall('CorrespondanceOTMUpdate', array($parameters));
    }

    /**
     * CorrespondanceOTMDelete deletes an existing OTM relation.
     *
     * @param CorrespondanceOTMDelete $parameters
     * @return CorrespondanceOTMDeleteResponse
     */
    public function CorrespondanceOTMDelete(CorrespondanceOTMDelete $parameters)
    {
        return $this->__soapCall('CorrespondanceOTMDelete', array($parameters));
    }

    /**
     * GetCorrespondanceOTM provides a list of OTM relations.
     *
     * @param GetCorrespondanceOTM $parameters
     * @return GetCorrespondanceOTMResponse
     */
    public function GetCorrespondanceOTM(GetCorrespondanceOTM $parameters)
    {
        return $this->__soapCall('GetCorrespondanceOTM', array($parameters));
    }

    /**
     * GetKeyOTM provides a list of OTM Key
     *
     * @param GetKeyOTM $parameters
     * @return GetKeyOTMResponse
     */
    public function GetKeyOTM(GetKeyOTM $parameters)
    {
        return $this->__soapCall('GetKeyOTM', array($parameters));
    }

    /**
     * Replace link by tracking link
     *
     * @param TrackLinkAndSave $parameters
     * @return TrackLinkAndSaveResponse
     */
    public function TrackLinkAndSave(TrackLinkAndSave $parameters)
    {
        return $this->__soapCall('TrackLinkAndSave', array($parameters));
    }
}
