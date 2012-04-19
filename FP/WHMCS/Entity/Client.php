<?php

namespace FP\WHMCS;

class Client extends Entity
{
  public function setup()
  {
      $this->addField("user_id", "userid");
      $this->addField("id", "id");
      $this->addField("first_name", "firstname");
      $this->addField("last_name", "lastname");
      $this->addField("company_name", "companyname");
      $this->addField("email", "email");
      $this->addField("address_1", "address1");
      $this->addField("address_2", "address2");
      $this->addField("city", "city");
      $this->addField("state", "state");
      $this->addField("postcode", "postcode");
      $this->addField("country", "country");
      $this->addField("country_name", "countryname");
      $this->addField("phone_number", "phonenumber");
      $this->addField("notes", "notes");
      $this->addField("password", "password");
      $this->addField("currency", "currency");
      $this->addField("security_q_id", "securityqid");
      $this->addField("security_q_ans", "securityqans");
      $this->addField("group_id", "groupid");
      $this->addField("status", "status");
      $this->addField("credit", "credit");
      $this->addField("tax_exempt", "taxexempt");
      $this->addField("late_fee_overide", "latefeeoveride");
      $this->addField("overide_due_notices", "overideduenotices");
      $this->addField("language", "language");
      $this->addField("last_login", "lastlogin");
      $this->addField("billing_c_id", "billingcid");
      $this->addField("domain_emails", "domainemails");
      $this->addField("general_emails", "generalemails");
      $this->addField("invoice_emails", "invoiceemails");
      $this->addField("product_emails", "productemails");
      $this->addField("support_emails", "supportemails");
  }
}
