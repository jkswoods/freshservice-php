<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketFieldNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {

  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\TicketField') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\TicketField) {
      return true;
    }

    return false;
  }

  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\TicketField;
    if (isset($data['active'])) {
      $object->setActive($data['active']);
    }
    if (isset($data['created_at'])) {
      $object->setCreatedAt($data['created_at']);
    }
    if (isset($data['description'])) {
      $object->setDescription($data['description']);
    }
    if (isset($data['editable_in_portal'])) {
      $object->setEditableInPortal($data['editable_in_portal']);
    }
    if (isset($data['field_options'])) {
      $object->setFieldOptions($data['field_options']);
    }
    if (isset($data['field_type'])) {
      $object->setFieldType($data['field_type']);
    }
    if (isset($data['flexifield_def_entry_id'])) {
      $object->setFlexifieldDefEntryId($data['flexifield_def_entry_id']);
    }
    if (isset($data['id'])) {
      $object->setId($data['id']);
    }
    if (isset($data['label'])) {
      $object->setLabel($data['label']);
    }
    if (isset($data['label_in_portal'])) {
      $object->setLabelInPortal($data['label_in_portal']);
    }
    if (isset($data['name'])) {
      $object->setName($data['name']);
    }
    if (isset($data['position'])) {
      $object->setPosition($data['position']);
    }
    if (isset($data['required'])) {
      $object->setRequired($data['required']);
    }
    if (isset($data['required_for_closure'])) {
      $object->setRequiredForClosure($data['required_for_closure']);
    }
    if (isset($data['required_in_portal'])) {
      $object->setRequiredInPortal($data['required_in_portal']);
    }
    if (isset($data['updated_at'])) {
      $object->setUpdatedAt($data['updated_at']);
    }
    if (isset($data['visible_in_portal'])) {
      $object->setVisibleInPortal($data['visible_in_portal']);
    }
    if (isset($data['choices'])) {
      $object->setChoices($data['choices']);
    }
    if (isset($data['nested_ticket_fields'])) {
      $object->setNestedTicketFields($data['nested_ticket_fields']);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdclass();

    if (null !== $object->isActive()) {
      $data->{'active'} = $object->isActive();
    }
    if (null !== $object->getCreatedAt()) {
      $data->{'created_at'} = $object->getCreatedAt();
    }
    if (null !== $object->getDescription()) {
      $data->{'description'} = $object->getDescription();
    }
    if (null !== $object->isEditableInPortal()) {
      $data->{'editable_in_portal'} = $object->isEditableInPortal();
    }
    if (null !== $object->getFieldOptions()) {
      $data->{'field_options'} = $object->getFieldOptions();
    }
    if (null !== $object->getFieldType()) {
      $data->{'field_type'} = $object->getFieldType();
    }
    if (null !== $object->getFlexifieldDefEntryId()) {
      $data->{'flexifield_def_entry_id'} = $object->getFlexifieldDefEntryId();
    }
    if (null !== $object->getId()) {
      $data->{'id'} = $object->getId();
    }
    if (null !== $object->getLabel()) {
      $data->{'label'} = $object->getLabel();
    }
    if (null !== $object->getLabelInPortal()) {
      $data->{'label_in_portal'} = $object->getLabelInPortal();
    }
    if (null !== $object->getName()) {
      $data->{'name'} = $object->getName();
    }
    if (null !== $object->getPosition()) {
      $data->{'position'} = $object->getPosition();
    }
    if (null !== $object->isRequired()) {
      $data->{'required'} = $object->isRequired();
    }
    if (null !== $object->isRequiredForClosure()) {
      $data->{'required_for_closure'} = $object->isRequiredForClosure();
    }
    if (null !== $object->isRequiredInPortal()) {
      $data->{'required_in_portal'} = $object->isRequiredInPortal();
    }
    if (null !== $object->getUpdatedAt()) {
      $data->{'updated_at'} = $object->getUpdatedAt();
    }
    if (null !== $object->isVisibleInPortalO()) {
      $data->{'visbile_in_portal'} = $object->isVisibleInPortal();
    }
    if (null !== $object->getChoices()) {
      $data->{'choices'} = $object->getChoices();
    }
    if (null !== $object->getNestedTicketFields()) {
      $data['nested_ticket_fields'] = $object->getNestedTicketFields();
    }

    return $data;
  }
}