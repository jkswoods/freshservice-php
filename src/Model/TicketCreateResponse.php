<?php

namespace Freshservice\Model;

class TicketCreateResponse {

  private $status;
  private $item;

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getItem() {
    return $this->item;
  }

  public function setItem(TicketWrapper $item) {
    $this->item = $item;
  }
}