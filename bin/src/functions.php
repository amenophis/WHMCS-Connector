<?php

if(!function_exists('echoln'))
{
  function echoln($text)
  {
    echo $text, "\n";
  }
}

function clean_argv($argv)
{
  $new_args = array();
  $switches_to_remove = array('-f', '-v');
  
  foreach($argv as $i => $arg)
  {
    if(in_array($arg, $switches_to_remove))
    {
      unset($argv[$i]);
    }    
  }
  
  return array_values($argv);
}

function get_available_schema()
{
  $paths = array();
  foreach(glob(sprintf('%s/*', config_path)) as $path)
  {
    array_push($paths, substr($path, strrpos($path, '/') + 1));
  }
  return $paths;
}

function schema_exists($schema)
{
  return in_array($schema, get_available_schema());
}

function get_schema_files($schema)
{
  return glob(sprintf('%s/%s/*.json', config_path, $schema));
}

function load_schema_file($filename)
{
  return json_decode(file_get_contents($filename), true);
}

function get_template_filename($filename)
{
  return template_path.'/'.ucwords($filename).'.phtml';
}

function confirm($question)
{
  return true;
}
