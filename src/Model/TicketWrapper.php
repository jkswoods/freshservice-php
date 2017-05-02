<?php

namespace Freshservice\Model;

class TicketWrapper {

  private $helpdeskTicket;
  private $ccEmails;

  public function getHelpdeskTicket() {
    return $this->helpdeskTicket;
  }

  public function setHelpdeskTicket(Ticket $helpdeskTicket) {
    $this->helpdeskTicket = $helpdeskTicket;
  }

  public function getCcEmails() {
    return $this->ccEmails;
  }

  public function setCcEmails(array $ccEmails) {
    $this->ccEmails = $ccEmails;
  }
}