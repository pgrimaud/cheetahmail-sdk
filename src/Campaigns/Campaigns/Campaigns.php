<?php
namespace Cheetahmail\Campaigns\Campaigns;

use Cheetahmail\AuthHeaderInterface;

class Campaigns extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Create'                             => 'Cheetahmail\\Campaigns\\Campaigns\\Create',
        'CampaignParams'                     => 'Cheetahmail\\Campaigns\\Campaigns\\CampaignParams',
        'FilterParams'                       => 'Cheetahmail\\Campaigns\\Campaigns\\FilterParams',
        'SentParams'                         => 'Cheetahmail\\Campaigns\\Campaigns\\SentParams',
        'MessageParams'                      => 'Cheetahmail\\Campaigns\\Campaigns\\MessageParams',
        'CreateResponse'                     => 'Cheetahmail\\Campaigns\\Campaigns\\CreateResponse',
        'AuthHeader'                         => 'Cheetahmail\\Campaigns\\Campaigns\\AuthHeader',
        'CreateWithMultipleSents'            => 'Cheetahmail\\Campaigns\\Campaigns\\CreateWithMultipleSents',
        'ArrayOfSentParams'                  => 'Cheetahmail\\Campaigns\\Campaigns\\ArrayOfSentParams',
        'ArrayOfMessageParams'               => 'Cheetahmail\\Campaigns\\Campaigns\\ArrayOfMessageParams',
        'CreateWithMultipleSentsResponse'    => 'Cheetahmail\\Campaigns\\Campaigns\\CreateWithMultipleSentsResponse',
        'UpdateCampaign'                     => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateCampaign',
        'UpdateCampaignResponse'             => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateCampaignResponse',
        'CancelCampaign'                     => 'Cheetahmail\\Campaigns\\Campaigns\\CancelCampaign',
        'CancelCampaignResponse'             => 'Cheetahmail\\Campaigns\\Campaigns\\CancelCampaignResponse',
        'CancelSent'                         => 'Cheetahmail\\Campaigns\\Campaigns\\CancelSent',
        'CancelSentResponse'                 => 'Cheetahmail\\Campaigns\\Campaigns\\CancelSentResponse',
        'ReprogrammCampaign'                 => 'Cheetahmail\\Campaigns\\Campaigns\\ReprogrammCampaign',
        'ReprogrammCampaignResponse'         => 'Cheetahmail\\Campaigns\\Campaigns\\ReprogrammCampaignResponse',
        'GetCampaign'                        => 'Cheetahmail\\Campaigns\\Campaigns\\GetCampaign',
        'GetCampaignResponse'                => 'Cheetahmail\\Campaigns\\Campaigns\\GetCampaignResponse',
        'CampaignsDetails'                   => 'Cheetahmail\\Campaigns\\Campaigns\\CampaignsDetails',
        'ArrayOfSentDetails'                 => 'Cheetahmail\\Campaigns\\Campaigns\\ArrayOfSentDetails',
        'SentDetails'                        => 'Cheetahmail\\Campaigns\\Campaigns\\SentDetails',
        'FindCampaignsByDescription'         => 'Cheetahmail\\Campaigns\\Campaigns\\FindCampaignsByDescription',
        'FindCampaignsByDescriptionResponse' => 'Cheetahmail\\Campaigns\\Campaigns\\FindCampaignsByDescriptionResponse',
        'ArrayOfDetailsCamp'                 => 'Cheetahmail\\Campaigns\\Campaigns\\ArrayOfDetailsCamp',
        'DetailsCamp'                        => 'Cheetahmail\\Campaigns\\Campaigns\\DetailsCamp',
        'GetSourceByIdSent'                  => 'Cheetahmail\\Campaigns\\Campaigns\\GetSourceByIdSent',
        'GetSourceByIdSentResponse'          => 'Cheetahmail\\Campaigns\\Campaigns\\GetSourceByIdSentResponse',
        'SourceDetails'                      => 'Cheetahmail\\Campaigns\\Campaigns\\SourceDetails',
        'GetSourceOfCampaign'                => 'Cheetahmail\\Campaigns\\Campaigns\\GetSourceOfCampaign',
        'GetSourceOfCampaignResponse'        => 'Cheetahmail\\Campaigns\\Campaigns\\GetSourceOfCampaignResponse',
        'ArrayOfSourceDetails'               => 'Cheetahmail\\Campaigns\\Campaigns\\ArrayOfSourceDetails',
        'UpdateSentParams'                   => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateSentParams',
        'UpdateSentParamsResponse'           => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateSentParamsResponse',
        'List'                               => 'Cheetahmail\\Campaigns\\Campaigns\\ListCustom',
        'ListResponse'                       => 'Cheetahmail\\Campaigns\\Campaigns\\ListResponse',
        'ArrayOfCampaignsListDetails'        => 'Cheetahmail\\Campaigns\\Campaigns\\ArrayOfCampaignsListDetails',
        'CampaignsListDetails'               => 'Cheetahmail\\Campaigns\\Campaigns\\CampaignsListDetails',
        'ListBetweenTwoDates'                => 'Cheetahmail\\Campaigns\\Campaigns\\ListBetweenTwoDates',
        'ListBetweenTwoDatesResponse'        => 'Cheetahmail\\Campaigns\\Campaigns\\ListBetweenTwoDatesResponse',
        'UpdateMessage'                      => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateMessage',
        'UpdateMessageResponse'              => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateMessageResponse',
        'Delete'                             => 'Cheetahmail\\Campaigns\\Campaigns\\Delete',
        'DeleteResponse'                     => 'Cheetahmail\\Campaigns\\Campaigns\\DeleteResponse',
        'Suspend'                            => 'Cheetahmail\\Campaigns\\Campaigns\\Suspend',
        'SuspendResponse'                    => 'Cheetahmail\\Campaigns\\Campaigns\\SuspendResponse',
        'Start'                              => 'Cheetahmail\\Campaigns\\Campaigns\\Start',
        'StartResponse'                      => 'Cheetahmail\\Campaigns\\Campaigns\\StartResponse',
        'Restart'                            => 'Cheetahmail\\Campaigns\\Campaigns\\Restart',
        'RestartResponse'                    => 'Cheetahmail\\Campaigns\\Campaigns\\RestartResponse',
        'GetTotalMailCount'                  => 'Cheetahmail\\Campaigns\\Campaigns\\GetTotalMailCount',
        'GetTotalMailCountResponse'          => 'Cheetahmail\\Campaigns\\Campaigns\\GetTotalMailCountResponse',
        'GetCurrentMailCount'                => 'Cheetahmail\\Campaigns\\Campaigns\\GetCurrentMailCount',
        'GetCurrentMailCountResponse'        => 'Cheetahmail\\Campaigns\\Campaigns\\GetCurrentMailCountResponse',
        'ExecuteCampaignPreview'             => 'Cheetahmail\\Campaigns\\Campaigns\\ExecuteCampaignPreview',
        'ExecuteCampaignPreviewResponse'     => 'Cheetahmail\\Campaigns\\Campaigns\\ExecuteCampaignPreviewResponse',
        'CloseCampaign'                      => 'Cheetahmail\\Campaigns\\Campaigns\\CloseCampaign',
        'CloseCampaignResponse'              => 'Cheetahmail\\Campaigns\\Campaigns\\CloseCampaignResponse',
        'DuplicateCampaign'                  => 'Cheetahmail\\Campaigns\\Campaigns\\DuplicateCampaign',
        'DuplicateCampaignResponse'          => 'Cheetahmail\\Campaigns\\Campaigns\\DuplicateCampaignResponse',
        'AddSent'                            => 'Cheetahmail\\Campaigns\\Campaigns\\AddSent',
        'AddSentResponse'                    => 'Cheetahmail\\Campaigns\\Campaigns\\AddSentResponse',
        'ReprogramSent'                      => 'Cheetahmail\\Campaigns\\Campaigns\\ReprogramSent',
        'ReprogramSentResponse'              => 'Cheetahmail\\Campaigns\\Campaigns\\ReprogramSentResponse',
        'DeleteSent'                         => 'Cheetahmail\\Campaigns\\Campaigns\\DeleteSent',
        'DeleteSentResponse'                 => 'Cheetahmail\\Campaigns\\Campaigns\\DeleteSentResponse',
        'DuplicateSent'                      => 'Cheetahmail\\Campaigns\\Campaigns\\DuplicateSent',
        'DuplicateSentResponse'              => 'Cheetahmail\\Campaigns\\Campaigns\\DuplicateSentResponse',
        'UpdateSent'                         => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateSent',
        'UpdateSentResponse'                 => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateSentResponse',
        'UpdateSentMessage'                  => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateSentMessage',
        'UpdateSentMessageResponse'          => 'Cheetahmail\\Campaigns\\Campaigns\\UpdateSentMessageResponse',
        'StartSent'                          => 'Cheetahmail\\Campaigns\\Campaigns\\StartSent',
        'StartSentResponse'                  => 'Cheetahmail\\Campaigns\\Campaigns\\StartSentResponse',
        'RestartSent'                        => 'Cheetahmail\\Campaigns\\Campaigns\\RestartSent',
        'RestartSentResponse'                => 'Cheetahmail\\Campaigns\\Campaigns\\RestartSentResponse',
        'SuspendSent'                        => 'Cheetahmail\\Campaigns\\Campaigns\\SuspendSent',
        'SuspendSentResponse'                => 'Cheetahmail\\Campaigns\\Campaigns\\SuspendSentResponse',
    );

    /**
     * Campaigns constructor.
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
     * Méthode pour créer une campagne email avec 1 seul objet Sent
     *
     * @param Create $parameters
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
        return $this->__soapCall('Create', array($parameters));
    }

    /**
     * Méthode pour créer une campagne email avec n objets Sent
     *
     * @param CreateWithMultipleSents $parameters
     * @return CreateWithMultipleSentsResponse
     */
    public function CreateWithMultipleSents(CreateWithMultipleSents $parameters)
    {
        return $this->__soapCall('CreateWithMultipleSents', array($parameters));
    }

    /**
     * Méthode pour modifier les paramètres d'une campagne email
     *
     * @param UpdateCampaign $parameters
     * @return UpdateCampaignResponse
     */
    public function UpdateCampaign(UpdateCampaign $parameters)
    {
        return $this->__soapCall('UpdateCampaign', array($parameters));
    }

    /**
     * Méthode pour déprogrammer une campagne email
     *
     * @param CancelCampaign $parameters
     * @return CancelCampaignResponse
     */
    public function CancelCampaign(CancelCampaign $parameters)
    {
        return $this->__soapCall('CancelCampaign', array($parameters));
    }

    /**
     * Méthode pour déprogrammer un Sent d'une campagne email
     *
     * @param CancelSent $parameters
     * @return CancelSentResponse
     */
    public function CancelSent(CancelSent $parameters)
    {
        return $this->__soapCall('CancelSent', array($parameters));
    }

    /**
     * Méthode pour reprogrammer une campagne email
     *
     * @param ReprogrammCampaign $parameters
     * @return ReprogrammCampaignResponse
     */
    public function ReprogrammCampaign(ReprogrammCampaign $parameters)
    {
        return $this->__soapCall('ReprogrammCampaign', array($parameters));
    }

    /**
     * Méthode pour connaitre les détails d'une campagne email
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
        return $this->__soapCall('GetCampaign', array($parameters));
    }

    /**
     * Méthode pour rechercher une ou plusieurs campagnes via des mots clés inclus dans la description des campagnes
     *
     * @param FindCampaignsByDescription $parameters
     * @return FindCampaignsByDescriptionResponse
     */
    public function FindCampaignsByDescription(FindCampaignsByDescription $parameters)
    {
        return $this->__soapCall('FindCampaignsByDescription', array($parameters));
    }

    /**
     * Méthode pour connaitre les sources d'un sent d'une campagne email
     *
     * @param GetSourceByIdSent $parameters
     * @return GetSourceByIdSentResponse
     */
    public function GetSourceByIdSent(GetSourceByIdSent $parameters)
    {
        return $this->__soapCall('GetSourceByIdSent', array($parameters));
    }

    /**
     * Méthode pour connaitre les sources de chaque sent d'une campagne email
     *
     * @param GetSourceOfCampaign $parameters
     * @return GetSourceOfCampaignResponse
     */
    public function GetSourceOfCampaign(GetSourceOfCampaign $parameters)
    {
        return $this->__soapCall('GetSourceOfCampaign', array($parameters));
    }

    /**
     * Méthode pour modifier les paramètres d'envoi d'une campagne email
     *
     * @param UpdateSentParams $parameters
     * @return UpdateSentParamsResponse
     */
    public function UpdateSentParams(UpdateSentParams $parameters)
    {
        return $this->__soapCall('UpdateSentParams', array($parameters));
    }

    /**
     * Méthode permettant de lister les campagnes
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Méthode permettant de lister les campagnes
     *
     * @param ListBetweenTwoDates $parameters
     * @return ListBetweenTwoDatesResponse
     */
    public function ListBetweenTwoDates(ListBetweenTwoDates $parameters)
    {
        return $this->__soapCall('ListBetweenTwoDates', array($parameters));
    }

    /**
     * Méthode pour modifier le message d'une campagne email
     *
     * @param UpdateMessage $parameters
     * @return UpdateMessageResponse
     */
    public function UpdateMessage(UpdateMessage $parameters)
    {
        return $this->__soapCall('UpdateMessage', array($parameters));
    }

    /**
     * Méthode pour supprimer une campagne email
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
        return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Méthode pour suspendre une campagne email
     *
     * @param Suspend $parameters
     * @return SuspendResponse
     */
    public function Suspend(Suspend $parameters)
    {
        return $this->__soapCall('Suspend', array($parameters));
    }

    /**
     * Méthode pour démarrer une campagne email
     *
     * @param Start $parameters
     * @return StartResponse
     */
    public function Start(Start $parameters)
    {
        return $this->__soapCall('Start', array($parameters));
    }

    /**
     * Méthode pour reprendre l'envoi d'une campagne email
     *
     * @param Restart $parameters
     * @return RestartResponse
     */
    public function Restart(Restart $parameters)
    {
        return $this->__soapCall('Restart', array($parameters));
    }

    /**
     * Méthode permettant de connaître le nombre de mails prévus pour une campagne
     *
     * @param GetTotalMailCount $parameters
     * @return GetTotalMailCountResponse
     */
    public function GetTotalMailCount(GetTotalMailCount $parameters)
    {
        return $this->__soapCall('GetTotalMailCount', array($parameters));
    }

    /**
     * Méthode permettant de connaître le nombre de mails déjà envoyés pour une campagne
     *
     * @param GetCurrentMailCount $parameters
     * @return GetCurrentMailCountResponse
     */
    public function GetCurrentMailCount(GetCurrentMailCount $parameters)
    {
        return $this->__soapCall('GetCurrentMailCount', array($parameters));
    }

    /**
     * Methode permettant d'exécuter une preview de la campagne
     *
     * @param ExecuteCampaignPreview $parameters
     * @return ExecuteCampaignPreviewResponse
     */
    public function ExecuteCampaignPreview(ExecuteCampaignPreview $parameters)
    {
        return $this->__soapCall('ExecuteCampaignPreview', array($parameters));
    }

    /**
     * Méthode permettant de cloturer une campagne
     *
     * @param CloseCampaign $parameters
     * @return CloseCampaignResponse
     */
    public function CloseCampaign(CloseCampaign $parameters)
    {
        return $this->__soapCall('CloseCampaign', array($parameters));
    }

    /**
     * Méthode permettant de dupliquer une campagne
     *
     * @param DuplicateCampaign $parameters
     * @return DuplicateCampaignResponse
     */
    public function DuplicateCampaign(DuplicateCampaign $parameters)
    {
        return $this->__soapCall('DuplicateCampaign', array($parameters));
    }

    /**
     * Méthode permettant d'ajouter un objet Sent à une campagne
     *
     * @param AddSent $parameters
     * @return AddSentResponse
     */
    public function AddSent(AddSent $parameters)
    {
        return $this->__soapCall('AddSent', array($parameters));
    }

    /**
     * Méthode permettant de reprogrammer un Sent précédemment annulé
     *
     * @param ReprogramSent $parameters
     * @return ReprogramSentResponse
     */
    public function ReprogramSent(ReprogramSent $parameters)
    {
        return $this->__soapCall('ReprogramSent', array($parameters));
    }

    /**
     * Méthode permettant de supprimer un objet Sent d'une campagne
     *
     * @param DeleteSent $parameters
     * @return DeleteSentResponse
     */
    public function DeleteSent(DeleteSent $parameters)
    {
        return $this->__soapCall('DeleteSent', array($parameters));
    }

    /**
     * Méthode permettant de dupliquer un objet Sent d'une campagne
     *
     * @param DuplicateSent $parameters
     * @return DuplicateSentResponse
     */
    public function DuplicateSent(DuplicateSent $parameters)
    {
        return $this->__soapCall('DuplicateSent', array($parameters));
    }

    /**
     * Méthode pour modifier les paramètres d'un objet Sent de campagne
     *
     * @param UpdateSent $parameters
     * @return UpdateSentResponse
     */
    public function UpdateSent(UpdateSent $parameters)
    {
        return $this->__soapCall('UpdateSent', array($parameters));
    }

    /**
     * Méthode pour modifier les paramètres du message associé à un envoi de la campagne
     *
     * @param UpdateSentMessage $parameters
     * @return UpdateSentMessageResponse
     */
    public function UpdateSentMessage(UpdateSentMessage $parameters)
    {
        return $this->__soapCall('UpdateSentMessage', array($parameters));
    }

    /**
     * Méthode permettant de lancer un objet Sent de campagne
     *
     * @param StartSent $parameters
     * @return StartSentResponse
     */
    public function StartSent(StartSent $parameters)
    {
        return $this->__soapCall('StartSent', array($parameters));
    }

    /**
     * Méthode permettant de relancer un objet Sent de campagne
     *
     * @param RestartSent $parameters
     * @return RestartSentResponse
     */
    public function RestartSent(RestartSent $parameters)
    {
        return $this->__soapCall('RestartSent', array($parameters));
    }

    /**
     * Méthode permettant de suspendre un objet Sent de campagne
     *
     * @param SuspendSent $parameters
     * @return SuspendSentResponse
     */
    public function SuspendSent(SuspendSent $parameters)
    {
        return $this->__soapCall('SuspendSent', array($parameters));
    }
}
