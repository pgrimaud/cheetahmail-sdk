<?php
namespace Cheetahmail\Notify;

class Notify extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
      'List' => 'Cheetahmail\\Notify\\ListCustom',
      'ListResponse' => 'Cheetahmail\\Notify\\ListResponse',
      'ArrayOfNotifyGrp' => 'Cheetahmail\\Notify\\ArrayOfNotifyGrp',
      'NotifyGrp' => 'Cheetahmail\\Notify\\NotifyGrp',
      'AuthHeader' => 'Cheetahmail\\Notify\\AuthHeader',
      'Create' => 'Cheetahmail\\Notify\\Create',
      'CreateResponse' => 'Cheetahmail\\Notify\\CreateResponse',
      'Update' => 'Cheetahmail\\Notify\\Update',
      'UpdateResponse' => 'Cheetahmail\\Notify\\UpdateResponse',
      'Delete' => 'Cheetahmail\\Notify\\Delete',
      'DeleteResponse' => 'Cheetahmail\\Notify\\DeleteResponse',
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
        $options = array_merge(array(
      'features' => 1,
    ), $options);
        if (!$wsdl) {
            $wsdl = '../data/notify.wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Method to list notification groups
     *
     * @param ListCustom $parameters
     * @return ListResponse
     */
    public function aList($parameters)
    {
        return $this->__soapCall('List', array($parameters));
    }

    /**
     * Method to create a group for notifications
     *
     * @param Create $parameters
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
        return $this->__soapCall('Create', array($parameters));
    }

    /**
     * Method to update a group for notifications
     *
     * @param Update $parameters
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * Method to delete a group
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
        return $this->__soapCall('Delete', array($parameters));
    }
}
