#!/usr/bin/env php
<?php

define('root_path', __DIR__.'/..');
define('resource_path', __DIR__.'/resources');
define('template_path', resource_path.'/templates');
define('config_path', resource_path.'/configurations');

define('force', in_array('-f', $argv));
define('verbose', in_array('-v', $argv));


require root_path.'/bin/src/functions.php';
require root_path.'/src/FP/WHMCS/Loader.php';

use FP\WHMCS\Loader;
use FP\WHMCS\Generator;


$argv = clean_argv($argv);

$loader = new Loader();
$loader->register();
$generator = new Generator();

if (in_array('-h', $argv) || in_array('--help', $argv) || count($argv) < 3)
{
  echoln("Usage: {$argv[0]} schema namespace [output dir] [-v] [-f]");
  echoln(" -f force overwriting of paths and files");
  echoln(" -v verbose output");
  echoln(" schemas available: ");
  
  foreach(get_available_schema() as $schema)
  {
    echoln("  $schema");
  }
  exit;
}

$schema = $argv[1];
$namespace = $argv[2];
$output_dir = isset($argv[3]) ? $argv[3] : '.';
$overwrite = force;
$files = array();

if(!is_dir($output_dir))
{
  mkdir($output_dir, 0775, true);
  echoln("+dir {$output_dir}");
}

foreach(get_schema_files($argv[1]) as $schema_file)
{
  $schema_file_name = basename($schema_file);
  $schema = load_schema_file($schema_file);
  
  if(is_null($schema))
  {
    echoln("failed to parse {$schema_file_name} moving onto next file");
    continue;
  }
  
  $schema['namespace'] = $namespace;
  
  $entity = $generator->generate($schema, get_template_filename('Entity'));
  $type = $generator->generate($schema, get_template_filename('Type'));
  $entity_file_path = sprintf('%s/Entity/%s.php', $output_dir, $schema['className']);
  $type_file_path = sprintf('%s/Type/%s.php', $output_dir, $schema['className']);
  
  $files[$entity_file_path] = $entity;
  $files[$type_file_path] = $type;
  
  if(!$overwrite && (is_file($entity_file_path) || is_file($type_file_path)))
  {
    $overwrite = confirm('Files will be overwritten, do you want to continue? [y/n]', array('y', 'n')) == 'y';
    
    if(!$overwrite)
      exit(0);
  }
}

foreach($files as $file => $contents)
{
  @mkdir(dirname($file), 0755, true);
  if(file_put_contents($file, $contents))
  {
    echoln("+file {$file}");
  }
  else
  {
    echoln("error: failed to write to {$file}");  
  }
}