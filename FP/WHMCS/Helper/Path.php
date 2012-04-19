<?php

namespace FP\WHMCS\Helper;

class Path
{
  public static function dirname($file)
  {
    return dirname($this->fixPath($file));
  }
  
  public static function fixPath($file)
  {
    return str_replace('\\', DIRECTORY_SEPARATOR, $file);
  }
}