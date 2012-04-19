<?php

namespace FP\WHMCS\Types;
use FP\WHMCS\Type as DataType;


class Invoice extends DataType
{
  public function setup()
  {
    $this->setActions(array(
      'get' => 'getinvoice',
      'create' => 'createinvoice',
      'update' => 'updateinvoice'
    ));
    $this->addField("invoiceid");
    $this->addField("invoicenum");
    $this->addField("userid");
    $this->addField("date");
    $this->addField("duedate");
    $this->addField("datepaid");
    $this->addField("subtotal");
    $this->addField("credit");
    $this->addField("tax");
    $this->addField("tax2");
    $this->addField("total");
    $this->addField("taxrate");
    $this->addField("taxrate2");
    $this->addField("status");
    $this->addField("paymentmethod");
    $this->addField("notes");
    $this->addField("items");
  }
}
