<?php


/*
 * This file is part of the FP-WHMCS-Connector
 *
 * (c) IFP Ltd <support@french-property.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Amenophis\WHMCS;

/**
 * Autoloader, simple enough to get you started quickly if you lack your 
 * own autoloader
 * @author Daniel Chalk <snathcfrigate@gmail.com>
 */
class Loader
{
  /**
   * @var string
   */
  protected $dir;

  protected static $instance;

  public function __construct()
  {
    if (isset(self::$instance))
      throw new Exception('cannot create two instances');

    $this->setDir($this->dirname(__FILE__).'/../..');
  }

  public function register()
  {
    spl_autoload_register(array($this, 'load'), true);
  }

  public function load($classname)
  {
    $file_path = sprintf('%s/%s.php', $this->getDir(), $classname);

    if (!is_file($file_path))
    {
      throw new \Exception("File {$file_path} doesn't exit");
    }

    require_once $file_path;
  }

  /**
   * Get dir
   *
   * @return string
   */
  public function getDir()
  {
    return $this->dir;
  }

  /**
   * Set dir
   *
   * @param string $dir
   * @return FP\WHMCS\Loader
   */
  public function setDir($dir)
  {
    $this->dir = $dir;
    return $this;
  }

  public static function getInstance()
  {
    if (!isset(self::$instance))
    {
      self::$instance = new self;
    }

    return self::$instance;
  }
  
  private function dirname($file)
  {
    return dirname($this->fixPath($file));
  }
  
  private function fixPath($file)
  {
    return str_replace('\\', DIRECTORY_SEPARATOR, $file);
  }

}
