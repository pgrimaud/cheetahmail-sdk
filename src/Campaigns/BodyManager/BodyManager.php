<?php
namespace Cheetahmail\Campaigns\BodyManager;

class BodyManager extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetListLink'                                 => 'Cheetahmail\\Campaigns\\BodyManager\\GetListLink',
        'GetListLinkResponse'                         => 'Cheetahmail\\Campaigns\\BodyManager\\GetListLinkResponse',
        'ArrayOfRelayDetails'                         => 'Cheetahmail\\Campaigns\\BodyManager\\ArrayOfRelayDetails',
        'RelayDetails'                                => 'Cheetahmail\\Campaigns\\BodyManager\\RelayDetails',
        'AuthHeader'                                  => 'Cheetahmail\\Campaigns\\BodyManager\\AuthHeader',
        'TrackLink'                                   => 'Cheetahmail\\Campaigns\\BodyManager\\TrackLink',
        'TrackLinkResponse'                           => 'Cheetahmail\\Campaigns\\BodyManager\\TrackLinkResponse',
        'TrackLinkForWA'                              => 'Cheetahmail\\Campaigns\\BodyManager\\TrackLinkForWA',
        'TrackLinkForWAResponse'                      => 'Cheetahmail\\Campaigns\\BodyManager\\TrackLinkForWAResponse',
        'UnTrackLink'                                 => 'Cheetahmail\\Campaigns\\BodyManager\\UnTrackLink',
        'UnTrackLinkResponse'                         => 'Cheetahmail\\Campaigns\\BodyManager\\UnTrackLinkResponse',
        'TrackListLink'                               => 'Cheetahmail\\Campaigns\\BodyManager\\TrackListLink',
        'TrackListLinkResponse'                       => 'Cheetahmail\\Campaigns\\BodyManager\\TrackListLinkResponse',
        'TrackBody'                                   => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBody',
        'TrackBodyResponse'                           => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBodyResponse',
        'TrackBodyForWebAnalytics'                    => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBodyForWebAnalytics',
        'TrackBodyForWebAnalyticsResponse'            => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBodyForWebAnalyticsResponse',
        'TrackBodyGetListLink'                        => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBodyGetListLink',
        'TrackBodyGetListLinkResponse'                => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBodyGetListLinkResponse',
        'BodyLinkDetails'                             => 'Cheetahmail\\Campaigns\\BodyManager\\BodyLinkDetails',
        'TrackBodyForWebAnalyticsGetListLink'         => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBodyForWebAnalyticsGetListLink',
        'TrackBodyForWebAnalyticsGetListLinkResponse' => 'Cheetahmail\\Campaigns\\BodyManager\\TrackBodyForWebAnalyticsGetListLinkResponse',
        'UnTrackBody'                                 => 'Cheetahmail\\Campaigns\\BodyManager\\UnTrackBody',
        'UnTrackBodyResponse'                         => 'Cheetahmail\\Campaigns\\BodyManager\\UnTrackBodyResponse',
        'UnTrackBodyWebAnalytics'                     => 'Cheetahmail\\Campaigns\\BodyManager\\UnTrackBodyWebAnalytics',
        'UnTrackBodyWebAnalyticsResponse'             => 'Cheetahmail\\Campaigns\\BodyManager\\UnTrackBodyWebAnalyticsResponse',
        'GetListCategory'                             => 'Cheetahmail\\Campaigns\\BodyManager\\GetListCategory',
        'GetListCategoryResponse'                     => 'Cheetahmail\\Campaigns\\BodyManager\\GetListCategoryResponse',
        'ArrayOfCataDetails'                          => 'Cheetahmail\\Campaigns\\BodyManager\\ArrayOfCataDetails',
        'CataDetails'                                 => 'Cheetahmail\\Campaigns\\BodyManager\\CataDetails',
        'GetListWebAnalytics'                         => 'Cheetahmail\\Campaigns\\BodyManager\\GetListWebAnalytics',
        'GetListWebAnalyticsResponse'                 => 'Cheetahmail\\Campaigns\\BodyManager\\GetListWebAnalyticsResponse',
        'ArrayOfWebAnalyticDetails'                   => 'Cheetahmail\\Campaigns\\BodyManager\\ArrayOfWebAnalyticDetails',
        'WebAnalyticDetails'                          => 'Cheetahmail\\Campaigns\\BodyManager\\WebAnalyticDetails',
        'GetCategory'                                 => 'Cheetahmail\\Campaigns\\BodyManager\\GetCategory',
        'GetCategoryResponse'                         => 'Cheetahmail\\Campaigns\\BodyManager\\GetCategoryResponse',
        'UpdateCategory'                              => 'Cheetahmail\\Campaigns\\BodyManager\\UpdateCategory',
        'UpdateCategoryResponse'                      => 'Cheetahmail\\Campaigns\\BodyManager\\UpdateCategoryResponse',
        'CreateCategory'                              => 'Cheetahmail\\Campaigns\\BodyManager\\CreateCategory',
        'NewCataDetails'                              => 'Cheetahmail\\Campaigns\\BodyManager\\NewCataDetails',
        'CreateCategoryResponse'                      => 'Cheetahmail\\Campaigns\\BodyManager\\CreateCategoryResponse',
        'UpdateCategoryOnLink'                        => 'Cheetahmail\\Campaigns\\BodyManager\\UpdateCategoryOnLink',
        'UpdateCategoryOnLinkResponse'                => 'Cheetahmail\\Campaigns\\BodyManager\\UpdateCategoryOnLinkResponse',
    );

    /**
     * BodyManager constructor.
     * @param AuthHeader $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeader $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/campaigns/bodymanager.wsdl';
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
        $data           = new \StdClass();
        $data->UserName = new \SoapVar($authHeader->getUserName(), XSD_STRING, null, null, null, self::EMS_WS_NAMESPACE);
        $data->Password = new \SoapVar($authHeader->getPassword(), XSD_STRING, null, null, null, self::EMS_WS_NAMESPACE);
        $data->IdMlist  = new \SoapVar($authHeader->getIdMlist(), XSD_INTEGER, null, null, null, self::EMS_WS_NAMESPACE);
        $headerValues   = new \SoapVar($data, SOAP_ENC_OBJECT, null, null, null, self::EMS_WS_NAMESPACE);
        $header         = new \SoapHeader(self::EMS_WS_NAMESPACE, "AuthHeader", $headerValues);

        return $header;
    }

    /**
     * méthode permettant de recuperer la liste des liens d'une categorie
     *
     * @param GetListLink $parameters
     * @return GetListLinkResponse
     */
    public function GetListLink(GetListLink $parameters)
    {
        return $this->__soapCall('GetListLink', array($parameters));
    }

    /**
     * Méthode permettant de tracker un lien
     *
     * @param TrackLink $parameters
     * @return TrackLinkResponse
     */
    public function TrackLink(TrackLink $parameters)
    {
        return $this->__soapCall('TrackLink', array($parameters));
    }

    /**
     * Méthode permettant de tracker un lien pour un webanalytic
     *
     * @param TrackLinkForWA $parameters
     * @return TrackLinkForWAResponse
     */
    public function TrackLinkForWA(TrackLinkForWA $parameters)
    {
        return $this->__soapCall('TrackLinkForWA', array($parameters));
    }

    /**
     * Méthode permettant de détracker un lien
     *
     * @param UnTrackLink $parameters
     * @return UnTrackLinkResponse
     */
    public function UnTrackLink(UnTrackLink $parameters)
    {
        return $this->__soapCall('UnTrackLink', array($parameters));
    }

    /**
     * Méthode permettant de tracker un liste de lien
     *
     * @param TrackListLink $parameters
     * @return TrackListLinkResponse
     */
    public function TrackListLink(TrackListLink $parameters)
    {
        return $this->__soapCall('TrackListLink', array($parameters));
    }

    /**
     * Méthode permettant de tracker un corp de texte
     *
     * @param TrackBody $parameters
     * @return TrackBodyResponse
     */
    public function TrackBody(TrackBody $parameters)
    {
        return $this->__soapCall('TrackBody', array($parameters));
    }

    /**
     * Méthode permettant de tracker un corp de texte pour les WebAnalytics
     *
     * @param TrackBodyForWebAnalytics $parameters
     * @return TrackBodyForWebAnalyticsResponse
     */
    public function TrackBodyForWebAnalytics(TrackBodyForWebAnalytics $parameters)
    {
        return $this->__soapCall('TrackBodyForWebAnalytics', array($parameters));
    }

    /**
     * Méthode permettant de tracker un corp de texte et de récupérer la liste des liens trackés et le body
     *
     * @param TrackBodyGetListLink $parameters
     * @return TrackBodyGetListLinkResponse
     */
    public function TrackBodyGetListLink(TrackBodyGetListLink $parameters)
    {
        return $this->__soapCall('TrackBodyGetListLink', array($parameters));
    }

    /**
     * Méthode permettant de tracker un corp de texte pour les WebAnalytics et de récupérer la liste des liens trackés et le body
     *
     * @param TrackBodyForWebAnalyticsGetListLink $parameters
     * @return TrackBodyForWebAnalyticsGetListLinkResponse
     */
    public function TrackBodyForWebAnalyticsGetListLink(TrackBodyForWebAnalyticsGetListLink $parameters)
    {
        return $this->__soapCall('TrackBodyForWebAnalyticsGetListLink', array($parameters));
    }

    /**
     * méthode permettant de détracker un corp de texte
     *
     * @param UnTrackBody $parameters
     * @return UnTrackBodyResponse
     */
    public function UnTrackBody(UnTrackBody $parameters)
    {
        return $this->__soapCall('UnTrackBody', array($parameters));
    }

    /**
     * méthode permettant de détracker un corp de texte contenant des liens trackés pour les WebAnalytics
     *
     * @param UnTrackBodyWebAnalytics $parameters
     * @return UnTrackBodyWebAnalyticsResponse
     */
    public function UnTrackBodyWebAnalytics(UnTrackBodyWebAnalytics $parameters)
    {
        return $this->__soapCall('UnTrackBodyWebAnalytics', array($parameters));
    }

    /**
     * méthode permettant de lister les catégories
     *
     * @param GetListCategory $parameters
     * @return GetListCategoryResponse
     */
    public function GetListCategory(GetListCategory $parameters)
    {
        return $this->__soapCall('GetListCategory', array($parameters));
    }

    /**
     * méthode permettant de lister les webanalytics
     *
     * @param GetListWebAnalytics $parameters
     * @return GetListWebAnalyticsResponse
     */
    public function GetListWebAnalytics(GetListWebAnalytics $parameters)
    {
        return $this->__soapCall('GetListWebAnalytics', array($parameters));
    }

    /**
     * méthode permettant de récuperer une catégorie
     *
     * @param GetCategory $parameters
     * @return GetCategoryResponse
     */
    public function GetCategory(GetCategory $parameters)
    {
        return $this->__soapCall('GetCategory', array($parameters));
    }

    /**
     * méthode permettant d'updater une catégorie
     *
     * @param UpdateCategory $parameters
     * @return UpdateCategoryResponse
     */
    public function UpdateCategory(UpdateCategory $parameters)
    {
        return $this->__soapCall('UpdateCategory', array($parameters));
    }

    /**
     * méthode permettant créer une catégorie
     *
     * @param CreateCategory $parameters
     * @return CreateCategoryResponse
     */
    public function CreateCategory(CreateCategory $parameters)
    {
        return $this->__soapCall('CreateCategory', array($parameters));
    }

    /**
     * méthode permettant d'updater les catégories sur le lien ou de les supprimer
     *
     * @param UpdateCategoryOnLink $parameters
     * @return UpdateCategoryOnLinkResponse
     */
    public function UpdateCategoryOnLink(UpdateCategoryOnLink $parameters)
    {
        return $this->__soapCall('UpdateCategoryOnLink', array($parameters));
    }
}
