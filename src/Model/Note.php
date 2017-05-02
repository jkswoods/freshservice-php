<?php

namespace Freshservice\Model;

class Note {

  private $id;
  private $body;
  private $bodyHtml;
  private $attachments;
  private $userId;
  private $private;
  private $toEmails;
  private $deleted;
  private $createdAt;
  private $updatedAt;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getBody() {
    return $this->body;
  }

  public function setBody($body) {
    $this->body = $body;
  }

  public function getBodyHtml() {
    return $this->bodyHtml;
  }

  public function setBodyHtml($bodyHtml) {
    $this->bodyHtml = $bodyHtml;
  }

  public function getAttachments() {
    return $this->attachments;
  }

  public function setAttachments(array $attachments) {
    $this->attachments = $attachments;
  }

  public function getUserId() {
    return $this->userId;
  }
  
  public function setUserId($userId) {
    $this->userId = $userId;
  }

  public function isPrivate() {
    return $this->private;
  }

  public function setPrivate($private) {
    $this->private = $private;
  }

  public function getToEmails() {
    return $this->toEmails;
  }

  public function setToEmails($toEmails) {
    $this->toEmails = $toEmails;
  }

  public function isDeleted() {
    return $this->deleted;
  }

  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }

  public function getCreatedAt() {
    return $this->createdAt;
  }

  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }
}