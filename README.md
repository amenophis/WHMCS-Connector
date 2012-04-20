WHMCS connector for PHP 5.3
===========================
Connect your web applications with WHMCS.

You can either use the API directly using the "execute" method in the adapter or you can use the model given with the connector.

TODO
----
* Add support for helper actions, not all actions relate to a specific data type.
* Implement save & update methods for Entity derived classes, this will need to be done in the templates
* Create unit test templates for each Entity derived class.
* Impliment field validation via phpdoc to remove the need creating a Type class for each Entity.
