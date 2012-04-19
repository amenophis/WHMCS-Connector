<?php

namespace FP\WHMCS\Model\Entity;
use FP\WHMCS\Entity;
use FP\WHMCS\Adapter\Connector;
use FP\WHMCS\Adapter\Response;
use FP\WHMCS\Adapter\Manager;

class Invoice extends Entity
{
   
  /**
   * @var numeric 
   */ 
  protected $invoiceid;
   
  /**
   * @var numeric 
   */ 
  protected $invoicenum;
   
  /**
   * @var numeric 
   */ 
  protected $userid;
   
  /**
   * @var date 
   */ 
  protected $date;
   
  /**
   * @var date 
   */ 
  protected $duedate;
   
  /**
   * @var datetime 
   */ 
  protected $datepaid;
   
  /**
   * @var numeric 
   */ 
  protected $subtotal;
   
  /**
   * @var numeric 
   */ 
  protected $credit;
   
  /**
   * @var numeric 
   */ 
  protected $tax;
   
  /**
   * @var numeric 
   */ 
  protected $tax2;
   
  /**
   * @var numeric 
   */ 
  protected $total;
   
  /**
   * @var numeric 
   */ 
  protected $taxrate;
   
  /**
   * @var enum 
   */ 
  protected $status;
   
  /**
   * @var text 
   */ 
  protected $paymentmethod;
   
  /**
   * @var text 
   */ 
  protected $notes;
   
  /**
   * @var list 
   */ 
  protected $items;
     
  /**
   * get invoiceid 
   * @return numeric 
   */ 
  public function getInvoiceId()
  {
    return $this->invoiceid;
  }
  
  /**
   * set invoiceid 
   * @param numeric $invoiceid 
   * @return Invoice 
   */ 
  public function setInvoiceId($invoiceid)
  {
    $this->invoiceid = $invoiceid;
    return $this;
  }
     
  /**
   * get invoicenum 
   * @return numeric 
   */ 
  public function getInvoiceNumber()
  {
    return $this->invoicenum;
  }
  
  /**
   * set invoicenum 
   * @param numeric $invoicenum 
   * @return Invoice 
   */ 
  public function setInvoiceNumber($invoicenumber)
  {
    $this->invoicenum = $invoicenumber;
    return $this;
  }
     
  /**
   * get userid 
   * @return numeric 
   */ 
  public function getUserId()
  {
    return $this->userid;
  }
  
  /**
   * set userid 
   * @param numeric $userid 
   * @return Invoice 
   */ 
  public function setUserId($userid)
  {
    $this->userid = $userid;
    return $this;
  }
     
  /**
   * get date 
   * @return date 
   */ 
  public function getDate()
  {
    return $this->date;
  }
  
  /**
   * set date 
   * @param date $date 
   * @return Invoice 
   */ 
  public function setDate($date)
  {
    $this->date = $date;
    return $this;
  }
     
  /**
   * get duedate 
   * @return date 
   */ 
  public function getDueDate()
  {
    return $this->duedate;
  }
  
  /**
   * set duedate 
   * @param date $duedate 
   * @return Invoice 
   */ 
  public function setDueDate($duedate)
  {
    $this->duedate = $duedate;
    return $this;
  }
     
  /**
   * get datepaid 
   * @return datetime 
   */ 
  public function getDatePaid()
  {
    return $this->datepaid;
  }
  
  /**
   * set datepaid 
   * @param datetime $datepaid 
   * @return Invoice 
   */ 
  public function setDatePaid($datepaid)
  {
    $this->datepaid = $datepaid;
    return $this;
  }
     
  /**
   * get subtotal 
   * @return numeric 
   */ 
  public function getSubTotal()
  {
    return $this->subtotal;
  }
  
  /**
   * set subtotal 
   * @param numeric $subtotal 
   * @return Invoice 
   */ 
  public function setSubTotal($subtotal)
  {
    $this->subtotal = $subtotal;
    return $this;
  }
     
  /**
   * get credit 
   * @return numeric 
   */ 
  public function getCretid()
  {
    return $this->credit;
  }
  
  /**
   * set credit 
   * @param numeric $credit 
   * @return Invoice 
   */ 
  public function setCretid($cretid)
  {
    $this->credit = $cretid;
    return $this;
  }
     
  /**
   * get tax 
   * @return numeric 
   */ 
  public function getTax()
  {
    return $this->tax;
  }
  
  /**
   * set tax 
   * @param numeric $tax 
   * @return Invoice 
   */ 
  public function setTax($tax)
  {
    $this->tax = $tax;
    return $this;
  }
     
  /**
   * get tax2 
   * @return numeric 
   */ 
  public function getTax2()
  {
    return $this->tax2;
  }
  
  /**
   * set tax2 
   * @param numeric $tax2 
   * @return Invoice 
   */ 
  public function setTax2($tax2)
  {
    $this->tax2 = $tax2;
    return $this;
  }
     
  /**
   * get total 
   * @return numeric 
   */ 
  public function getTotal()
  {
    return $this->total;
  }
  
  /**
   * set total 
   * @param numeric $total 
   * @return Invoice 
   */ 
  public function setTotal($total)
  {
    $this->total = $total;
    return $this;
  }
     
  /**
   * get taxrate 
   * @return numeric 
   */ 
  public function getTaxRate()
  {
    return $this->taxrate;
  }
  
  /**
   * set taxrate 
   * @param numeric $taxrate 
   * @return Invoice 
   */ 
  public function setTaxRate($taxrate)
  {
    $this->taxrate = $taxrate;
    return $this;
  }
     
  /**
   * get status 
   * @return enum 
   */ 
  public function getStatus()
  {
    return $this->status;
  }
  
  /**
   * set status 
   * @param enum $status 
   * @return Invoice 
   */ 
  public function setStatus($status)
  {
    $this->status = $status;
    return $this;
  }
     
  /**
   * get paymentmethod 
   * @return text 
   */ 
  public function getPaymentMethod()
  {
    return $this->paymentmethod;
  }
  
  /**
   * set paymentmethod 
   * @param text $paymentmethod 
   * @return Invoice 
   */ 
  public function setPaymentMethod($paymentmethod)
  {
    $this->paymentmethod = $paymentmethod;
    return $this;
  }
     
  /**
   * get notes 
   * @return text 
   */ 
  public function getNotes()
  {
    return $this->notes;
  }
  
  /**
   * set notes 
   * @param text $notes 
   * @return Invoice 
   */ 
  public function setNotes($notes)
  {
    $this->notes = $notes;
    return $this;
  }
     
  /**
   * get items 
   * @return list 
   */ 
  public function getItems()
  {
    return $this->items;
  }
  
  /**
   * set items 
   * @param list $items 
   * @return Invoice 
   */ 
  public function setItems($items)
  {
    $this->items = $items;
    return $this;
  }
    /**
   * get items 
   * @return list 
   */ 
  public function getItem($key)
  {
    return $this->items[$key];
  }
  
  /**
   * set items 
   * @param list $items 
   * @return Invoice 
   */ 
  public function setItem($key, $item)
  {
    $this->items[$key] = $item;
    return $this;
  }
     
}