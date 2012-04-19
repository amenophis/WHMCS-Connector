<?php

namespace FP\WHMCS\Adapter;

abstract class Connector
{
  protected $host;
  protected $username;
  protected $password;
  protected $format;

  public function __construct($host, $username, $password)
  {
    $this->setHost($host)->setUsername($username)->setPassword($password);
  }

  public function execute($action, $params)
  {
    $query_string = '';

    $params = $this->mergeParams($action, $params);
    
    foreach ($params as $k => $v)
    {
      $query_string .= "$k=" . urlencode($v) . "&";
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->host . '/includes/api.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $data = curl_exec($ch);

    if (curl_error($ch))
      throw new Exception("Connection Error: " . curl_errno($ch) . ' - ' . curl_error($ch));

    curl_close($ch);
    
    return $data;
  }

  protected function mergeParams($action, $params)
  {
    return array_merge(array('username' => $this->getUsername(), 'password' => $this->getPassword(), 'responsetype' => $this->format, 'action' => $action), $params);
  }

  /**
   * Get host
   *
   * @return string
   */
  public function getHost()
  {
    return $this->host;
  }

  /**
   * Set host
   *
   * @param string $host
   * @return FP\WHMCS\Adapter
   */
  protected function setHost($host)
  {
    $this->host = $host;
    return $this;
  }

  /**
   * Get username
   *
   * @return string
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Set username
   *
   * @param string $username
   * @return FP\WHMCS\Adapter
   */
  protected function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  /**
   * Get password
   *
   * @return VariableType
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set password
   *
   * @param VariableType $password
   * @return FP\WHMCS\Adapter
   */
  protected function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }

  /**
   * Get format
   *
   * @return VariableType
   */
  protected function getFormat()
  {
    return $this->format;
  }

  /**
   * Set format
   *
   * @param VariableType $format
   * @return FP\WHMCS\Adapter
   */
  protected function setFormat($format)
  {
    $this->format = $format;
    return $this;
  }

  public static function getInstance($host, $username, $password)
  {
    throw new Exception('Not implemented');
  }
}
