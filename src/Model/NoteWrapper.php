<?php

namespace Freshservice\Model;

class NoteWrapper {

  private $helpdeskNote;

  public function getHelpdeskNote() {
    return $this->helpdeskNote;
  }

  public function setHelpdeskNote(Note $helpdeskNote) {
    $this->helpdeskNote = $helpdeskNote;
  }
}