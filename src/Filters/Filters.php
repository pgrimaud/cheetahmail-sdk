<?php

namespace Cheetahmail\Filters;

class Filters extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Create' => 'Cheetahmail\\Filters\\Create',
      'CreateResponse' => 'Cheetahmail\\Filters\\CreateResponse',
      'AuthHeader' => 'Cheetahmail\\Filters\\AuthHeader',
      'SetFields' => 'Cheetahmail\\Filters\\SetFields',
      'ArrayOfCriterion' => 'Cheetahmail\\Filters\\ArrayOfCriterion',
      'Criterion' => 'Cheetahmail\\Filters\\Criterion',
      'SetFieldsResponse' => 'Cheetahmail\\Filters\\SetFieldsResponse',
      'GetFields' => 'Cheetahmail\\Filters\\GetFields',
      'GetFieldsResponse' => 'Cheetahmail\\Filters\\GetFieldsResponse',
      'List' => 'Cheetahmail\\Filters\\ListCustom',
      'ListResponse' => 'Cheetahmail\\Filters\\ListResponse',
      'ArrayOfString' => 'Cheetahmail\\Filters\\ArrayOfString',
      'CountFilter' => 'Cheetahmail\\Filters\\CountFilter',
      'CountFilterResponse' => 'Cheetahmail\\Filters\\CountFilterResponse',
      'GetSubscriberForFilter' => 'Cheetahmail\\Filters\\GetSubscriberForFilter',
      'GetSubscriberForFilterResponse' => 'Cheetahmail\\Filters\\GetSubscriberForFilterResponse',
      'ArrayOfArrayOfArrayOfString' => 'Cheetahmail\\Filters\\ArrayOfArrayOfArrayOfString',
      'ArrayOfArrayOfString' => 'Cheetahmail\\Filters\\ArrayOfArrayOfString',
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
        $wsdl = '../data/filters.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Méthode pour créer un filtre par champs
     *
     * @param Create $parameters
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
      return $this->__soapCall('Create', array($parameters));
    }

    /**
     * Méthode pour définir les critères du filtre
     *
     * @param SetFields $parameters
     * @return SetFieldsResponse
     */
    public function SetFields(SetFields $parameters)
    {
      return $this->__soapCall('SetFields', array($parameters));
    }

    /**
     * Méthode permettant de sélectionner les critères du filtre
     *
     * @param GetFields $parameters
     * @return GetFieldsResponse
     */
    public function GetFields(GetFields $parameters)
    {
      return $this->__soapCall('GetFields', array($parameters));
    }

    /**
     * Méthode pour lister les filtres par champs
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
      return $this->__soapCall('List', array($parameters));
    }

    /**
     * Méthode pour compter le nombre d'abonnés sur cette cible
     *
     * @param CountFilter $parameters
     * @return CountFilterResponse
     */
    public function CountFilter(CountFilter $parameters)
    {
      return $this->__soapCall('CountFilter', array($parameters));
    }

    /**
     * Récupère la liste des abonnés pour une cible
     *
     * @param GetSubscriberForFilter $parameters
     * @return GetSubscriberForFilterResponse
     */
    public function GetSubscriberForFilter(GetSubscriberForFilter $parameters)
    {
      return $this->__soapCall('GetSubscriberForFilter', array($parameters));
    }

}
