#!/usr/bin/env php
<?php

function echoln($text)
{
  echo $text, "\n";
}

function parseTemplate($template, $vars = array())
{
  $template = sprintf('%s/templates/%s.phtml', __DIR__, $template);
  extract($vars);
  ob_start();
  require $template;
  return ob_get_clean();
}

if ($argv[1] == '--help')
{
  echoln("Usage: {$argv[0]} 5.0.3 \"FP\\WHMCS\\Model\"");
  exit ;
}

if (!isset($argv[1]))
{
  echoln("version required");
  echoln("versions available");

  $folders = glob(sprintf('%s/configurations/*', __DIR__));
  foreach ($folders as $folder)
  {
    echoln(" " . substr($folder, strrpos($folder, '/') + 1));
  }
}
else
{
  if (!is_dir(sprintf('%s/configurations/%s', __DIR__, $argv[1])))
  {
    echoln("version not supported");
    echoln("versions available");

    $folders = glob(sprintf('%s/configurations/*', __DIR__));
    foreach ($folders as $folder)
    {
      echoln(" " . substr($folder, strrpos($folder, '/') + 1));
    }
  }
}

if (!isset($argv[2]))
{
  echoln("please specify a namespace");
}

$namespace = @$argv[2];
$force = in_array('-f', $argv);
$output_dir = isset($argv[3]) ? $argv[3] : '.';

foreach(glob(sprintf('%s/configurations/%s/*.json', __DIR__, @$argv[1])) as $spec_path)
{
  $spec_file_name = basename($spec_path);
  $spec = json_decode(file_get_contents($spec_path), true);
  $spec['namespace'] = $namespace;
  if(is_null($spec))
  {
    echoln("failed to parse {$spec_file_name}");
    continue;
  }
  
  @mkdir($output_dir.'/Entity', true);
  @mkdir($output_dir.'/Type', true);
  file_put_contents(sprintf('%s/Entity/%s.php', $output_dir, $spec['className']), parseTemplate('Entity', $spec));
  file_put_contents(sprintf('%s/Type/%s.php', $output_dir, $spec['className']), parseTemplate('Type', $spec));
}



