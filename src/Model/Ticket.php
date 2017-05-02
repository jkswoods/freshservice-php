<?php

namespace Freshservice\Model;

class Ticket {

  private $displayId;
  private $email;
  private $requesterId;
  private $assocProblemId;
  private $assocChangeId;
  private $assocChangeCauseId;
  private $assocAssetId;
  private $subject;
  private $description;
  private $descriptionHtml;
  private $status;
  private $priority;
  private $source;
  private $deleted;
  private $spam;
  private $responderId;
  private $groupId;
  private $ticketType;
  private $toEmail;
  private $ccEmail;
  private $emailConfigId;
  private $isEscalated;
  private $dueBy;
  private $id;
  private $attachments;
  private $category;
  private $subCategory;
  private $itemCategory;
  
  public function getDisplayId() {
    return $this->displayId;
  }

  public function setDisplayId($displayId) {
    $this->displayId = $displayId;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getRequesterId() {
    return $this->requesterId;
  }

  public function setRequesterId($requesterId) {
    $this->requesterId = $requesterId;
  }

  public function getAssocProblemId() {
    return $this->assocProblemId;
  }
  
  public function setAssocProblemId($assocProblemId) {
    $this->asocProblemId = $assocProblemId;
  }

  public function getAssocChangeId() {
    return $this->assocChangeId;
  }

  public function setAssocChangeId($assocChangeId) {
    $this->assocChangeId = $assocChangeId;
  }

  public function getAssocChangeCauseId() {
    return $this->assocChangeCauseId;
  }

  public function setAssocChangeCauseId($assocChangeCauseId) {
    $this->assocChangeCauseId = $assocChangeCauseId;
  }

  public function getAssocAssetId() {
    return $this->assocAssetId;
  }

  public function setAssocAssetId($assocAssetId) {
    $this->assocAssetId = $assocAssetId;
  }

  public function getSubject() {
    return $this->subject;
  }

  public function setSubject($subject) {
    $this->subject = $subject;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public function getDescriptionHtml() {
    return $this->descriptionHtml;
  }

  public function setDescriptionHtml($descriptionHtml) {
    $this->descriptionHtml = $descriptionHtml;
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getPriority() {
    return $this->priority;
  }

  public function setPriority($priority) {
    $this->priority = $priority;
  }

  public function getSource() {
    return $this->source;
  }

  public function setSource($source) {
    $this->source = $source;
  }

  public function isDeleted() {
    return $this->deleted;
  }

  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }

  public function isSpam() {
    return $this->spam;
  }

  public function setSpam($spam) {
    $this->spam = $spam;
  }

  public function getResponderId() {
    return $this->responderId;
  }

  public function setResponderId($responderId) {
    $this->responderId = $responderId;
  }

  public function getGroupId() {
    return $this->groupId;
  }

  public function setGroupId($groupId) {
    $this->groupId = $groupId;
  }

  public function getTicketType() {
    return $this->ticketType;
  }

  public function setTicketType($ticketType) {
    $this->ticketType = $ticketType;
  }

  public function getToEmail() {
    return $this->toEmail;
  }

  public function setToEmail($toEmail) {
    $this->toEmail = $toEmail;
  }

  public function getCcEmail() {
    return $this->ccEmail;
  }

  public function setCcEmail($ccEmail) {
    $this->ccEmail = $ccEmail;
  }

  public function getEmailConfigId() {
    return $this->emailConfigId;
  }

  public function setEamilConfigId($emailConfigId) {
    $this->emailConfigId = $emailConfigId;
  }

  public function isEscalated() {
    return $this->isEscalated;
  }

  public function setIsEscalated($isEscalated) {
    $this->isEscalated = $isEscalated;
  }

  public function getDueBy() {
    return $this->dueBy;
  }

  public function setDueBy($dueBy) {
    $this->dueBy = $dueBy;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getAttachments() {
    return $this->attachments;
  }

  public function setAttachments(array $attachments) {
    $this->attachments = $attachments;
  }

  public function getCategory() {
    return $this->category;
  }

  public function setCategory($category) {
    $this->category = $category;
  }

  public function getSubCategory() {
    return $this->subCategory;
  }

  public function setSubCategory($subCategory) {
    $this->subCategory = $subCategory;
  }

  public function getItemCategory() {
    return $this->itemCategory;
  }

  public function setItemCategory($itemCategory) {
    $this->itemCategory = $itemCategory;
  }
}