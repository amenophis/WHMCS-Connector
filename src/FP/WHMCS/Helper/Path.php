<?php

/*
 * This file is part of the FP-WHMCS-Connector
 *
 * (c) IFP Ltd <support@french-property.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FP\WHMCS\Helper;

/**
 * Path helper, using __DIR__ with php5.3 can be problematic.
 * This class helps with the problem
 * @author Daniel Chalk <snathcfrigate@gmail.com>
 */
class Path
{
  public static function dirname($file)
  {
    return dirname(self::fixPath($file));
  }
  
  public static function fixPath($file)
  {
    return str_replace('\\', DIRECTORY_SEPARATOR, $file);
  }
}