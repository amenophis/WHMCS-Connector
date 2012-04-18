<?php

namespace FP\WHMCS\Fields;

class Base
{
  protected $options;

  public function __construct($options = array())
  {
    $this->options = $options;
  }
  
  public function getOptionsAvailable()
  {
    return array();
  }
  
  public function getDefaultOptions()
  {
    return array();
  }
  
  /**
   * Get options
   *
   * @return mixed[]
   */

  public function getOptions()
  {
    return $this->options;
  }

  /**
   * Set options
   *
   * @param mixed[] $options
   * @return FP\WHMCS\Fields\Text
   */
  public function setOptions($options)
  {
    $this->options = $options;
    return $this;
  }
  
  /**
   * Get option
   * @param string $option
   * @return mixed
   */

  public function getOption($option)
  {
    return $this->options[$option];
  }

  /**
   * Set options
   *
   * @param sting $option
   * @param mixed $value;
   * @return FP\WHMCS\Fields\Text
   */
  public function setOption($option, $value)
  {
    $this->options[$option] = $value;
    return $this;
  }
  
  public function valid($valid)
  {
    return true;
  }
}
