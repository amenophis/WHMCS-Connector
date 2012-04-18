<?php

namespace FP\WHMCS\Adapter;

abstract class Response
{
  protected $response;

  public function __construct($response)
  {
    $this->response = $response;
    $this->setup();
  }

  abstract protected function setup();
  abstract public function getValue($name);
}
