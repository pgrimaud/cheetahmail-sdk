<?php
namespace Cheetahmail\Campaigns\ChronoContact;

use Cheetahmail\AuthHeaderInterface;

class ChronoContact extends \SoapClient
{
    const EMS_WS_NAMESPACE = 'http://ws.ems6.net/';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'SendMail'                     => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMail',
        'SendMailResponse'             => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMailResponse',
        'AuthHeader'                   => 'Cheetahmail\\Campaigns\\ChronoContact\\AuthHeader',
        'SendMailByPacket'             => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMailByPacket',
        'ArrayOfInt'                   => 'Cheetahmail\\Campaigns\\ChronoContact\\ArrayOfInt',
        'SendMailByPacketResponse'     => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMailByPacketResponse',
        'SendMailHTML'                 => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMailHTML',
        'SendMailHTMLResponse'         => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMailHTMLResponse',
        'SendMailHTMLByPacket'         => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMailHTMLByPacket',
        'SendMailHTMLByPacketResponse' => 'Cheetahmail\\Campaigns\\ChronoContact\\SendMailHTMLByPacketResponse',
        'CreateTemplate'               => 'Cheetahmail\\Campaigns\\ChronoContact\\CreateTemplate',
        'CreateTemplateResponse'       => 'Cheetahmail\\Campaigns\\ChronoContact\\CreateTemplateResponse',
        'GetTemplate'                  => 'Cheetahmail\\Campaigns\\ChronoContact\\GetTemplate',
        'GetTemplateResponse'          => 'Cheetahmail\\Campaigns\\ChronoContact\\GetTemplateResponse',
        'Template'                     => 'Cheetahmail\\Campaigns\\ChronoContact\\Template',
        'DeleteTemplate'               => 'Cheetahmail\\Campaigns\\ChronoContact\\DeleteTemplate',
        'DeleteTemplateResponse'       => 'Cheetahmail\\Campaigns\\ChronoContact\\DeleteTemplateResponse',
        'ModifyTemplate'               => 'Cheetahmail\\Campaigns\\ChronoContact\\ModifyTemplate',
        'ModifyTemplateResponse'       => 'Cheetahmail\\Campaigns\\ChronoContact\\ModifyTemplateResponse',
        'GetTemplates'                 => 'Cheetahmail\\Campaigns\\ChronoContact\\GetTemplates',
        'GetTemplatesResponse'         => 'Cheetahmail\\Campaigns\\ChronoContact\\GetTemplatesResponse',
        'ArrayOfArrayOfString'         => 'Cheetahmail\\Campaigns\\ChronoContact\\ArrayOfArrayOfString',
        'ArrayOfString'                => 'Cheetahmail\\Campaigns\\ChronoContact\\ArrayOfString',
        'CreateChrono'                 => 'Cheetahmail\\Campaigns\\ChronoContact\\CreateChrono',
        'CreateChronoResponse'         => 'Cheetahmail\\Campaigns\\ChronoContact\\CreateChronoResponse',
        'ModifyChrono'                 => 'Cheetahmail\\Campaigns\\ChronoContact\\ModifyChrono',
        'ModifyChronoResponse'         => 'Cheetahmail\\Campaigns\\ChronoContact\\ModifyChronoResponse',
        'getChronos'                   => 'Cheetahmail\\Campaigns\\ChronoContact\\getChronos',
        'getChronosResponse'           => 'Cheetahmail\\Campaigns\\ChronoContact\\getChronosResponse',
        'getChrono'                    => 'Cheetahmail\\Campaigns\\ChronoContact\\getChrono',
        'getChronoResponse'            => 'Cheetahmail\\Campaigns\\ChronoContact\\getChronoResponse',
        'Chrono'                       => 'Cheetahmail\\Campaigns\\ChronoContact\\Chrono',
        'DeleteChrono'                 => 'Cheetahmail\\Campaigns\\ChronoContact\\DeleteChrono',
        'DeleteChronoResponse'         => 'Cheetahmail\\Campaigns\\ChronoContact\\DeleteChronoResponse',
        'getCampaigns'                 => 'Cheetahmail\\Campaigns\\ChronoContact\\getCampaigns',
        'getCampaignsResponse'         => 'Cheetahmail\\Campaigns\\ChronoContact\\getCampaignsResponse',
    );

    /**
     * ChronoContact constructor.
     * @param AuthHeaderInterface $authHeader
     * @param null $wsdl
     * @param array $options
     */
    public function __construct(AuthHeaderInterface $authHeader, $wsdl = null, $options = [])
    {
        $this->__setSoapHeaders($this->createHeader($authHeader));
        $wsdl = $wsdl ?: __DIR__ . '/../../../data/campaigns/chronocontact.wsdl';
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
     * Méthode permettant d'ordonner l'envoi d'un mail de type Chrono à un utilisateur
     *
     * @param SendMail $parameters
     * @return SendMailResponse
     */
    public function SendMail(SendMail $parameters)
    {
        return $this->__soapCall('SendMail', array($parameters));
    }

    /**
     * Méthode permettant d'ordonner l'envoi d'un mail de type Chrono à un utilisateur
     *
     * @param SendMailByPacket $parameters
     * @return SendMailByPacketResponse
     */
    public function SendMailByPacket(SendMailByPacket $parameters)
    {
        return $this->__soapCall('SendMailByPacket', array($parameters));
    }

    /**
     * Méthode permettant d'ordonner l'envoi d'un mail de type Chrono à un utilisateur en précisant éventuellement un sujet, un corps de message HTML ou texte
     *
     * @param SendMailHTML $parameters
     * @return SendMailHTMLResponse
     */
    public function SendMailHTML(SendMailHTML $parameters)
    {
        return $this->__soapCall('SendMailHTML', array($parameters));
    }

    /**
     * Méthode permettant d'ordonner l'envoi d'un mail de type Chrono à un utilisateur en précisant éventuellement un sujet, un corps de message HTML ou texte
     *
     * @param SendMailHTMLByPacket $parameters
     * @return SendMailHTMLByPacketResponse
     */
    public function SendMailHTMLByPacket(SendMailHTMLByPacket $parameters)
    {
        return $this->__soapCall('SendMailHTMLByPacket', array($parameters));
    }

    /**
     * Méthode permettant de creer un template mail, la methode renvoi l'identifiant du template créé
     *
     * @param CreateTemplate $parameters
     * @return CreateTemplateResponse
     */
    public function CreateTemplate(CreateTemplate $parameters)
    {
        return $this->__soapCall('CreateTemplate', array($parameters));
    }

    /**
     * Méthode permettant de récupérer un template mail
     *
     * @param GetTemplate $parameters
     * @return GetTemplateResponse
     */
    public function GetTemplate(GetTemplate $parameters)
    {
        return $this->__soapCall('GetTemplate', array($parameters));
    }

    /**
     * Méthode permettant de supprimer un template mail
     *
     * @param DeleteTemplate $parameters
     * @return DeleteTemplateResponse
     */
    public function DeleteTemplate(DeleteTemplate $parameters)
    {
        return $this->__soapCall('DeleteTemplate', array($parameters));
    }

    /**
     * Méthode permettant de modifier un template en fonction de son id, renvoi true si la modification s'est bien effectuée
     *
     * @param ModifyTemplate $parameters
     * @return ModifyTemplateResponse
     */
    public function ModifyTemplate(ModifyTemplate $parameters)
    {
        return $this->__soapCall('ModifyTemplate', array($parameters));
    }

    /**
     * Méthode permettant d'obtenir la liste de ses templates (paires idtempalte/ description)
     *
     * @param GetTemplates $parameters
     * @return GetTemplatesResponse
     */
    public function GetTemplates(GetTemplates $parameters)
    {
        return $this->__soapCall('GetTemplates', array($parameters));
    }

    /**
     * Méthode permettant de creer une campagne chronomail, la methode renvoi l'identifiant du chronomail créé
     *
     * @param CreateChrono $parameters
     * @return CreateChronoResponse
     */
    public function CreateChrono(CreateChrono $parameters)
    {
        return $this->__soapCall('CreateChrono', array($parameters));
    }

    /**
     * Méthode permettant de modifier une campagne chronomail en fonction de son id, renvoi true si la modification s'est bien effectuée
     *
     * @param ModifyChrono $parameters
     * @return ModifyChronoResponse
     */
    public function ModifyChrono(ModifyChrono $parameters)
    {
        return $this->__soapCall('ModifyChrono', array($parameters));
    }

    /**
     * Méthode permettant d'obtenir la liste de ses chronomail (paires idchrono/ description)
     *
     * @param getChronos $parameters
     * @return getChronosResponse
     */
    public function getChronos(getChronos $parameters)
    {
        return $this->__soapCall('getChronos', array($parameters));
    }

    /**
     * Méthode permettant d'obtenir un Chrono
     *
     * @param getChrono $parameters
     * @return getChronoResponse
     */
    public function getChrono(getChrono $parameters)
    {
        return $this->__soapCall('getChrono', array($parameters));
    }

    /**
     * Méthode permettant de supprimer un Chrono
     *
     * @param DeleteChrono $parameters
     * @return DeleteChronoResponse
     */
    public function DeleteChrono(DeleteChrono $parameters)
    {
        return $this->__soapCall('DeleteChrono', array($parameters));
    }

    /**
     * Méthode permettant d'obtenir la liste de ses campagnes chronomail (paires id/ nom)
     *
     * @param getCampaigns $parameters
     * @return getCampaignsResponse
     */
    public function getCampaigns(getCampaigns $parameters)
    {
        return $this->__soapCall('getCampaigns', array($parameters));
    }
}
