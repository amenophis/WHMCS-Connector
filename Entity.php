<?php

namespace FP\WHMCS;

use FP\WHMCS\Type;
use FP\WHMCS\Adapter\Connector;
use FP\WHMCS\Adapter\Manager;
use FP\WHMCS\Adapter\Response;

abstract class Entity
{
  protected $_type;
  protected $_connector;

  public function __construct(Connector $connector = null)
  {
    //if connector is null, use the default
    if(is_null($connector))
      $this->setConnector(Manager::getInstance()->getConnector());
    
    //autoload the type, this is dirty, i need to think of a better way!
    $classname = @end(explode('\\', get_class($this)));
    $classname = "FP\\WHMCS\\Types\\{$classname}";
    $this->setType(new $classname);
  }

  /**
   * get value of a field
   * @param string $field
   */
  public function get($field)
  {
    return $this->$field;
  }

  /**
   * set value of a field
   * @param string $field
   * @param mixed $value
   * @return self
   */
  public function set($field, $value)
  {
    $this->$field = $value;
    return $this;
  }

  /**
   * Get _connector
   *
   * @return VariableType
   */

  public function getConnector()
  {
    return $this->connector;
  }

  /**
   * Set _connector
   *
   * @param VariableType $_connector
   * @return FP\WHMCS\Entity
   */
  public function setConnector($connector)
  {
    $this->_connector = $connector;
    return $this;
  }

  /**
   * Get type
   *
   * @return FP\WHMCS\Type
   */

  public function getType()
  {
    return $this->_type;
  }

  /**
   * Set type
   *
   * @param VariableType $_type
   * @return FP\WHMCS\Entity
   */
  public function setType(Type $type)
  {
    $this->_type = $type;
    return $this;
  }
  
  public static function makeInstance(Response $response, Connector $connector = null)
  {
    throw new Exception('implement me');
  }
}
