<?php

class AdapterJsonTest extends PHPUnit_Framework_TestCase
{
  public function testGetInstanceOf()
  {
    $this->assertInstanceOf('Amenophis\WHMCS\Adapter\Json\Connector', Amenophis\WHMCS\Adapter\Json\Connector::getInstance(null, null, null));
  }
  
  public function testGetInstanceOfConnector()
  {
    $this->assertInstanceOf('Amenophis\WHMCS\Adapter\Connector', Amenophis\WHMCS\Adapter\Json\Connector::getInstance(null, null, null));
  }
}
