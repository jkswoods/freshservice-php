<?php

namespace Freshservice\Model;

class TicketField {

  private $active;
  private $createdAt;
  private $description;
  private $editableInPortal;
  private $fieldOptions;
  private $fieldType;
  private $flexifieldDefEntryId;
  private $id;
  private $label;
  private $labelInPortal;
  private $name;
  private $position;
  private $required;
  private $requiredForClosure;
  private $requiredInPortal;
  private $updatedAt;
  private $visibleInPortal;
  private $choices;
  private $nestedTicketFields;

  public function isActive() {
    return $this->active;
  }

  public function setActive($active) {
    $this->active = $active;
  }

  public function getCreatedAt() {
    return $this->createdAt;
  }

  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public function isEditableInPortal() {
    return $this->editableInPortal;
  }

  public function setEditableInPortal($editableInPortal) {
    $this->editableInPortal = $editableInPortal;
  }

  public function getFieldOptions() {
    return $this->fieldOptions;
  }

  public function setFieldOptions($fieldOptions) {
    $this->fieldOptions = $fieldOptions;
  }

  public function getFieldType() {
    return $this->fieldType;
  }
  
  public function setFieldType($fieldType) {
    $this->fieldType = $fieldType;
  }

  public function getFlexifieldDefEntryId() {
    return $this->flexifieldDefEntryId;
  }

  public function setFlexifieldDefEntryId($flexifieldDefEntryId) {
    $this->flexifieldDefEntryId = $flexifieldDefEntryId;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getLabel() {
    return $this->label;
  }

  public function setLabel($label) {
    $this->label = $label;
  }

  public function getLabelInPortal() {
    return $this->labelInPortal;
  }

  public function setLabelInPortal($labelInPortal) {
    $this->labelInPortal = $labelInPortal;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getPosition() {
    return $this->position;
  }

  public function setPosition($position) {
    $this->position = $position;
  }

  public function isRequired() {
    return $this->required;
  }

  public function setRequired($required) {
    $this->required = $required;
  }

  public function isRequiredForClosure() {
    return $this->requiredForClosure;
  }

  public function setRequiredForClosure($requiredForClosure) {
    $this->requiredForClosure = $requiredForClosure;
  }

  public function isRequiredInPortal() {
    return $this->requiredInPortal;
  }

  public function setRequiredInPortal($requiredInPortal) {
    $this->requiredInPortal = $requiredInPortal;
  }

  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  public function isVisibleInPortal() {
    return $this->visibleInPortal;
  }

  public function setVisibleInPortal($visibleInPortal) {
    $this->visibleInPortal = $visibleInPortal;
  }

  public function getChoices() {
    return $this->choices;
  }

  public function setChoices($choices) {
    $this->choices = $choices;
  }

  public function getNestedTicketFields() {
    return $this->nestedTicketFields;
  }

  public function setNestedTicketFields($nestedTicketFields) {
    $this->nestedTicketFields = $nestedTicketFields;
  }
}