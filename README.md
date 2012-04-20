WHMCS connector for PHP 5.3
===========================
Easily connect your web applications with WHMCS.

Requires PHP CURL extension

Usage
-----
```php
<?php

include 'FP/WHMCS/Loader.php';
use FP\WHMCS\Loader;
$loader = Loader();
$loader->register();

use FP\WHMCS\Adapter\Manager;
use FP\WHMCS\Adapter\Json\Connector;

$connector = Connector::getInstance('http://domain.com', 'username', md5('password'));

$manager = Manager::getInstance();
$manager->setConnector('default', $connector);

$response = $connector->execute('action', array('arg1'=>'val1', 'arg2'=>'val2'));




