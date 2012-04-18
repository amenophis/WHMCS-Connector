WHMCS connector for PHP 5.3 

Tested with WHMCS 5.0.3 

Unit tests will follow in future versions.

Basic use, this is you want to access the data returned directly.

```php
use FP\WHMCS\Adapter\Manager as Manager;
use FP\WHMCS\Adapter\Json\Connector as Connector;

$manager = Manager::getInstance();
$manager->setConnector('default', Connector::getInstance('http://whmcsdomain.com', 'adminusername', md5('adminpassword')));

try
{
  $data = $manager->getConnector()->execute('validatelogin', array("email" => "user@client.com", "password2" => "client-password"));
  print_r($data);
}
catch(FP\WHMCS\Exception $e)
{
  echo "Error - {$e->getMessage()}";
  exit;
}
```

Using the model

```php
use FP\WHMCS\Adapter\Manager as Manager;
use FP\WHMCS\Adapter\Json\Connector as Connector;
use FP\WHMCS\Entity\Invoice as Invoice;

$manager = Manager::getInstance();
$manager->setConnector('default', Connector::getInstance('http://whmcsdomain.com', 'adminusername', md5('adminpassword')));

$invoice = Invoice::find($id);
$invoices = Invoice::find(array('userid' => $user_id));
```
