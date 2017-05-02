<?php

namespace Freshservice\Model;

class Attachment {

  private $contentContentType;
  private $contentFilename;
  private $contentFilesize;
  private $createdAt;
  private $id;
  private $updatedAt;
  private $attachmentUrl;
  private $resource;

  public function getContentContentType() {
    return $this->contentContentType;
  }

  public function setContentContentType($contentContentType) {
    $this->contnetContentType = $contentContentType;
  }

  public function getContentFilename() {
    return $this->contentFilename;
  }

  public function setContentFilename($contentFilename) {
    $this->contentFilename = $contentFilename;
  }

  public function getContentFilesize() {
    return $this->contentFilesize;
  }

  public function setContentFilesize($contentFilesize) {
    $this->contentFilesize = $contentFilesize;
  }

  public function getCreatedAt() {
    return $this->createdAt;
  }

  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  public function getAttachmentUrl() {
    return $this->attachmentUrl;
  }

  public function setAttachmentUrl($attachmentUrl) {
    $this->attachmentUrl = $attachmentUrl;
  }

  public function getResource() {
    return $this->resource;
  }

  public function setResource($resource) {
    $this->resource = $resource;
  }
}