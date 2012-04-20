<?php

require __DIR__ . '/_loader.php';

class AdapterJsonTest extends PHPUnit_Framework_TestCase
{
  public function testGetInstanceOf()
  {
    $this->assertInstanceOf('FP\WHMCS\Adapter\Json\Connector', FP\WHMCS\Adapter\Json\Connector::getInstance(null, null, null));
  }
  
  public function testGetInstanceOfConnector()
  {
    $this->assertInstanceOf('FP\WHMCS\Adapter\Connector', FP\WHMCS\Adapter\Json\Connector::getInstance(null, null, null));
  }
}
