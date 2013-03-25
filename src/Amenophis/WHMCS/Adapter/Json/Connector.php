<?php

/*
 * This file is part of the FP-WHMCS-Connector
 *
 * (c) IFP Ltd <support@french-property.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Amenophis\WHMCS\Adapter\Json;
use Amenophis\WHMCS\Adapter\Connector as BaseConnector;

/**
 * JSON Connector 
 * @author Daniel Chalk <snathcfrigate@gmail.com>
 */
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

  public function is($response, $is)
  {
    return $response->result == $is;
  }
}
