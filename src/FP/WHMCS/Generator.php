<?php

namespace FP\WHMCS;

use FP\WHMCS\Helper\Path;

class Generator
{
	public function generate($vars = array(), $template)
	{
	  extract($vars);
	  ob_start();
	  require $template;
	  return ob_get_clean();
	}
}