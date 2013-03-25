<?php

class AdapterTest extends PHPUnit_Framework_TestCase
{
  /**
   * @expectedException Amenophis\WHMCS\Adapter\Exception
   */
  public function testHttpException()
  {
    FP\WHMCS\Adapter\Json\Connector::getInstance(null, null, null)->execute('validatelogin', array('email' => null, 'password2' => null));
  }
}
