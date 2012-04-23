<?php

namespace FP\WHMCS\Adapter\Json;
use FP\WHMCS\Adapter\Connector as BaseConnector;

class Connector extends BaseConnector
{
  public function __construct($host, $username, $password)
  {
    parent::__construct($host, $username, $password);
    $this->setFormat('json');
  }

  public function execute($action, $params = array())
  {
    return json_decode(parent::execute($action, $params));
  }

  public static function getInstance($host, $username, $password)
  {
    return new self($host, $username, $password);
  }
}
