<?php

/*
 * This file is part of the FP-WHMCS-Connector
 *
 * (c) IFP Ltd <support@french-property.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FP\WHMCS\Adapter;

/**
 * Connection manager
 * Though its doubleful youll need more than one this acts as a registry
 * to allow multipul instances to be managed
 * @author Daniel Chalk <snathcfrigate@gmail.com>
 */
class Manager 
{
  private static $instance;
  private $connectors = array();
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
  public function get($name = null)
  {
    if(count($this->connectors) > 0)
    {    
      if(!is_null($name))
      {
        if(!isset($this->connectors[$name]))
          throw new \Exception("unknown Connector: $name");
        
        return $this->connectors[$name];
      }
      
      return current($this->connectors);
    }
    throw new \Exception('No Connectors found');
  }
  
  /**
   * @param string $name Index of the Connector
   * @param FP\WHMCS\Connector $Connector
   */
  public function set($name, Connector $connector)
  {    
    $this->connectors[$name] = $connector;
  }
}
