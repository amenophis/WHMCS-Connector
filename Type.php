<?php

namespace FP\WHMCS;

use FP\WHMCS\Fields\Base as Field;
use FP\WHMCS\Fields\Text as TextField;

abstract class Type
{
  protected $actions;
  protected $fields;
  
  public function __construct()
  {
    $this->setup();
  }

  public function addField($name, Field $type = null)
  {
    if (is_null($type))
      $type = new TextField;

    $this->fields[$name] = new $type;
  }

  public function setActions($actions)
  {
    $this->actions = $actions;
    return $this;
  }

  /**
   * Get fields
   *
   * @return FP\WHMCS\Field
   */
  public function getField($alias)
  {
    return $this->field[$alias];
  }

  /**
   * Set fields
   *
   * @param string $alias
   * @param FP\WHMCS\Field
   * @return self
   */
  public function setField($name, Field $field)
  {
    $this->fields[$name] = $field;
    return $this;
  }
}
