<?php

namespace FP\WHMCS\Entity;
use FP\WHMCS\Entity;
use FP\WHMCS\Adapter\Connector;
use FP\WHMCS\Adapter\Response;

class Invoice extends Entity
{
  protected $invoiceid;
  protected $invoicenum;
  protected $userid;
  protected $date;
  protected $duedate;
  protected $datepaid;
  protected $subtotal;
  protected $credit;
  protected $tax;
  protected $tax2;
  protected $total;
  protected $taxrate;
  protected $taxrate2;
  protected $status;
  protected $paymentmethod;
  protected $notes;
  protected $items;

  /**
   * Get invoiceid
   *
   * @return integer
   */

  public function getInvoiceId()
  {
    return $this->invoiceid;
  }

  /**
   * Set invoiceid
   *
   * @param integer $invoiceid
   * @return FP\WHMCS\Invoice
   */
  public function setInvoiceId($invoiceid)
  {
    $this->invoiceid = $invoiceid;
    return $this;
  }

  /**
   * Get invoicenum
   *
   * @return integer
   */
  public function getInvoiceNum()
  {
    return $this->invoicenum;
  }

  /**
   * Set invoicenum
   *
   * @param integer $invoicenum
   * @return FP\WHMCS\Invoice
   */
  public function setInvoiceNum($invoicenum)
  {
    $this->invoicenum = $invoicenum;
    return $this;
  }

  /**
   * Get userid
   *
   * @return integer
   */
  public function getUserId()
  {
    return $this->userid;
  }

  /**
   * Set userid
   *
   * @param integer $userid
   * @return FP\WHMCS\Invoice
   */
  public function setUserId($userid)
  {
    $this->userid = $userid;
    return $this;
  }

  /**
   * Get date
   *
   * @return string
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * Set date
   *
   * @param string $date
   * @return FP\WHMCS\Invoice
   */
  public function setDate($date)
  {
    $this->date = $date;
    return $this;
  }

  /**
   * Get duedate
   *
   * @return string
   */
  public function getDueDate()
  {
    return $this->duedate;
  }

  /**
   * Set duedate
   *
   * @param string $duedate
   * @return FP\WHMCS\Invoice
   */
  public function setDueDate($duedate)
  {
    $this->duedate = $duedate;
    return $this;
  }

  /**
   * Get datepaid
   *
   * @return string
   */
  public function getDatePaid()
  {
    return $this->datepaid;
  }

  /**
   * Set datepaid
   *
   * @param string $datepaid
   * @return FP\WHMCS\Invoice
   */
  public function setDatePaid($datepaid)
  {
    $this->datepaid = $datepaid;
    return $this;
  }

  /**
   * Get subtotal
   *
   * @return double
   */
  public function getSubtotal()
  {
    return $this->subtotal;
  }

  /**
   * Set subtotal
   *
   * @param double $subtotal
   * @return FP\WHMCS\Invoice
   */
  public function setSubtotal($subtotal)
  {
    $this->subtotal = $subtotal;
    return $this;
  }

  /**
   * Get credit
   *
   * @return double
   */
  public function getCredit()
  {
    return $this->credit;
  }

  /**
   * Set credit
   *
   * @param double $credit
   * @return FP\WHMCS\Invoice
   */
  public function setCredit($credit)
  {
    $this->credit = $credit;
    return $this;
  }

  /**
   * Get tax
   *
   * @return double
   */
  public function getTax()
  {
    return $this->tax;
  }

  /**
   * Set tax
   *
   * @param double $tax
   * @return FP\WHMCS\Invoice
   */
  public function setTax($tax)
  {
    $this->tax = $tax;
    return $this;
  }

  /**
   * Get tax2
   *
   * @return double
   */
  public function getTax2()
  {
    return $this->tax2;
  }

  /**
   * Set tax2
   *
   * @param double $tax2
   * @return FP\WHMCS\Invoice
   */
  public function setTax2($tax2)
  {
    $this->tax2 = $tax2;
    return $this;
  }

  /**
   * Get total
   *
   * @return double
   */
  public function getTotal()
  {
    return $this->total;
  }

  /**
   * Set total
   *
   * @param double $total
   * @return FP\WHMCS\Invoice
   */
  public function setTotal($total)
  {
    $this->total = $total;
    return $this;
  }

  /**
   * Get taxrate
   *
   * @return double
   */
  public function getTaxRate()
  {
    return $this->taxrate;
  }

  /**
   * Set taxrate
   *
   * @param double $taxrate
   * @return FP\WHMCS\Invoice
   */
  public function setTaxRate($taxrate)
  {
    $this->taxrate = $taxrate;
    return $this;
  }

  /**
   * Get taxrate2
   *
   * @return double
   */
  public function getTaxRate2()
  {
    return $this->taxrate2;
  }

  /**
   * Set taxrate2
   *
   * @param double $taxrate2
   * @return FP\WHMCS\Invoice
   */
  public function setTaxRate2($taxrate2)
  {
    $this->taxrate2 = $taxrate2;
    return $this;
  }

  /**
   * Get status
   *
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set status
   *
   * @param string $status
   * @return FP\WHMCS\Invoice
   */
  public function setStatus($status)
  {
    $this->status = $status;
    return $this;
  }

  /**
   * Get string
   *
   * @return VariableType
   */
  public function getPaymentMethod()
  {
    return $this->paymentmethod;
  }

  /**
   * Set paymentmethod
   *
   * @param string $paymentmethod
   * @return FP\WHMCS\Invoice
   */
  public function setPaymentMethod($paymentmethod)
  {
    $this->paymentmethod = $paymentmethod;
    return $this;
  }

  /**
   * Get notes
   *
   * @return string
   */
  public function getNotes()
  {
    return $this->notes;
  }

  /**
   * Set notes
   *
   * @param string $notes
   * @return FP\WHMCS\Invoice
   */
  public function setNotes($notes)
  {
    $this->notes = $notes;
    return $this;
  }

  /**
   * Get items
   *
   * @return string
   */
  public function getItems()
  {
    return $this->items;
  }

  /**
   * Set items
   *
   * @param string $items
   * @return FP\WHMCS\Invoice
   */
  public function setItems($items)
  {
    $this->items = $items;
    return $this;
  }
  
  public static function makeInstance(Response $response, Connector $connector = null)
  {
    $invoice = new self($connector);
    
    foreach($response->toArray() as $field => $value)
    {
      $invoice->set($field, $value);
    }
    
    return $invoice;
  }
}
