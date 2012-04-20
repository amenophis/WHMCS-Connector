<?php

require __DIR__ . '/_loader.php';

class AdapterTest extends PHPUnit_Framework_TestCase
{
  /**
   * @expectedException FP\WHMCS\Adapter\Exception
   */
  public function testHttpException()
  {
    FP\WHMCS\Adapter\Json\Connector::getInstance(null, null, null)->execute('validatelogin', array('email' => null, 'password2' => null));
  }
}
