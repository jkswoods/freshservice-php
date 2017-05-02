<?php

namespace Freshservice\Model;

class TicketFieldsWrapper {
  
  private $ticketFields;

  public function getTicketFields() {
    return $this->ticketFields;
  }

  public function setTicketFields(array $ticketFields) {
    $this->ticketFields = $ticketFields;
  }
}