<?php

namespace FP\WHMCS;

use FP\WHMCS\Helper\Path;

class Generator
{
	protected $template_dir;

	public function __construct()
	{
		$this->template_dir = Path::dirname(__FILE__);
	}

	public function generateEntity($config)
	{
		return self::parseTemplate('Entity', $config);
	}

	public function generateType($config)
	{
		return self::parseTemplate('Type', $config);
	}

	protected function parseTemplate($template, $vars = array())
	{
	  $template = sprintf('%s/generator/templates/%s.phtml', $this->template_dir, $template);
	  extract($vars);
	  ob_start();
	  require $template;
	  return ob_get_clean();
	}
}