<?php

namespace Cheetahmail\Stats;

class Stats extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'List' => 'Cheetahmail\\Stats\\ListCustom',
      'ListResponse' => 'Cheetahmail\\Stats\\ListResponse',
      'ArrayOfCampaignOverview' => 'Cheetahmail\\Stats\\ArrayOfCampaignOverview',
      'CampaignOverview' => 'Cheetahmail\\Stats\\CampaignOverview',
      'AuthHeader' => 'Cheetahmail\\Stats\\AuthHeader',
      'Get' => 'Cheetahmail\\Stats\\Get',
      'GetResponse' => 'Cheetahmail\\Stats\\GetResponse',
      'CampaignStats' => 'Cheetahmail\\Stats\\CampaignStats',
      'ListSMS' => 'Cheetahmail\\Stats\\ListSMS',
      'ListSMSResponse' => 'Cheetahmail\\Stats\\ListSMSResponse',
      'ArrayOfSMSCampaignOverview' => 'Cheetahmail\\Stats\\ArrayOfSMSCampaignOverview',
      'SMSCampaignOverview' => 'Cheetahmail\\Stats\\SMSCampaignOverview',
      'GetSMS' => 'Cheetahmail\\Stats\\GetSMS',
      'GetSMSResponse' => 'Cheetahmail\\Stats\\GetSMSResponse',
      'SMSCampaignStats' => 'Cheetahmail\\Stats\\SMSCampaignStats',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '../data/stats.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Méthode permettant de lister l'identitifant et la description de chacune des cent dernières campagnes envoyées (hors BAT et campagne sans destinataire)
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
      return $this->__soapCall('List', array($parameters));
    }

    /**
     * Méthode listant quelques chiffres concernant une campagne envoyée
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
      return $this->__soapCall('Get', array($parameters));
    }

    /**
     * Méthode permettant de lister l'identitifant et la description de chacune des cent dernières campagnes SMS envoyées
     *
     * @param ListSMS $parameters
     * @return ListSMSResponse
     */
    public function ListSMS(ListSMS $parameters)
    {
      return $this->__soapCall('ListSMS', array($parameters));
    }

    /**
     * Méthode détaillant les statistiques d'une campagne SMS envoyée
     *
     * @param GetSMS $parameters
     * @return GetSMSResponse
     */
    public function GetSMS(GetSMS $parameters)
    {
      return $this->__soapCall('GetSMS', array($parameters));
    }

}
