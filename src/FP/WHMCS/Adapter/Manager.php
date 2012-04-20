<?php

namespace FP\WHMCS\Adapter;

/**
 * Connection / Connector
 */
class Manager 
{
  private static $instance;
  private static $connectors = array();
  private static $current;
  
  public function __construct()
  {
    if(isset(self::$instance))
      throw new \Exception('Your cannot create multipul instances');
    
    self::$instance = $this;
  }
  
  /**
   * @return FP\WHMCS\Manager
   */
  public static function getInstance()
  {
    if(!isset(self::$instance))
      self::$instance = new self();
    
    return self::$instance;
  }
  
  /**
   * get an Connector by its name or it will return the default Connector
   * @param string $name Index of the chosen Connector
   * @return FP\WHMCS\Connector
   */
  public function getConnector($name = null)
  {
    if(count(self::$connectors) > 0)
    {    
      if(!is_null($name))
      {
        if(!isset(self::$connectors[$name]))
          throw new \Exception("unknown Connector: $name");
        
        return self::$connectors[$name];
      }
      
      return current(self::$connectors);
    }
    throw new \Exception('No Connectors found');
  }
  
  /**
   * @param string $name Index of the Connector
   * @param FP\WHMCS\Connector $Connector
   */
  public function setConnector($name, Connector $connector)
  {    
    self::$connectors[$name] = $connector;
  }
}
