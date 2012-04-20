WHMCS connector for PHP 5.3
===========================
Easily connect your web applications with WHMCS.

Requires PHP CURL extension

Usage
-----
```php
<?php

//include our load if you don't have one already
include 'FP/WHMCS/Loader.php';

$loader = FP\WHMCS\Loader();
$loader->register();

//use the classes we need to get started
use FP\WHMCS\Adapter\Manager; //manage our connections, only required if you plan on storing multiple connections
use FP\WHMCS\Adapter\Json\Connector; //the actually connector we will be using

//create a connector and configure it
$connector = Connector::getInstance('http://domain.com', 'username', md5('password'));

//create an instance of our manager and store our connector in it
$manager = Manager::getInstance();
$manager->setConnector('default', $connector);

//now we can start making requests and working with the response
$response = $connector->execute('action', array('arg1'=>'val1', 'arg2'=>'val2'));
```
