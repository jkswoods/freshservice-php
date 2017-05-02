<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\Ticket') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\Ticket) {
      return true;
    }

    return false;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\Ticket;
    if (isset($data['display_id'])) {
      $object->setDisplayId($data['display_id']);
    }
    if (isset($data['email'])) {
      $object->setEmail($data['email']);
    }
    if (isset($data['requester_id'])) {
      $object->setRequesterId($data['requester_id']);
    }
    if (isset($data['assoc_problem_id'])) {
      $object->setAssocProblemId($data['assoc_problem_id']);
    }
    if (isset($data['assoc_change_id'])) {
      $object->setAssocChangeId($data['assoc_change_id']);
    }
    if (isset($data['assoc_change_cause_id'])) {
      $object->setAssocChangeCauseId($data['assoc_change_cause_id']);
    }
    if (isset($data['assoc_asset_id'])) {
      $object->setAssocAssetId($data['assoc_asset_id']);
    }
    if (isset($data['subject'])) {
      $object->setSubject($data['subject']);
    }
    if (isset($data['description'])) {
      $object->setDescription($data['description']);
    }
    if (isset($data['description_html'])) {
      $object->setDescriptionHtml($data['description_html']);
    }
    if (isset($data['status'])) {
      $object->setStatus($data['status']);
    }
    if (isset($data['priority'])) {
      $object->setPriority($data['priority']);
    }
    if (isset($data['source'])) {
      $object->setSource($data['source']);
    }
    if (isset($data['deleted'])) {
      $object->setDeleted($data['deleted']);
    }
    if (isset($data['spam'])) {
      $object->setSpam($data['spam']);
    }
    if (isset($data['responsder_id'])) {
      $object->setResponderId($data['responder_id']);
    }
    if (isset($data['group_id'])) {
      $object->setGroupId($data['group_id']);
    }
    if (isset($data['ticket_type'])) {
      $object->setTicketType($data['ticket_type']);
    }
    if (isset($data['to_email'])) {
      $object->setToEmail($data['to_email']);
    }
    if (isset($data['cc_email'])) {
      $object->setCcEmail($data['cc_email']);
    }
    if (isset($data['email_config_id'])) {
      $object->setEmailConfigId($data['email_config_id']);
    }
    if (isset($data['isescalated'])) {
      $object->setIsEscalated($data['isescalated']);
    }
    if (isset($data['due_by'])) {
      $object->setDueBy($data['due_by']);
    }
    if (isset($data['id'])) {
      $object->setId($data['id']);
    }
    if (isset($data['attachments'])) {
      $attachmentsFormatted = array();
      foreach ($data['attachments'] as $attachment) {
        $attachmentsFormatted[] = $this->serializer->deserialize(json_encode($attachment), 'Freshservice\\Model\\Attachment', 'json');
      }
      $object->setAttachments($attachmentsFormatted);
    }
    if (isset($data['category'])) {
      $object->setCategory($data['category']);
    }
    if (isset($data['sub_category'])) {
      $object->setSubCategory($data['sub_category']);
    }
    if (isset($data['item_category'])) {
      $object->setItemCategory($data['item_category']);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdClass();
    if (null !== $object->getDisplayId()) {
      $data->{'display_id'} = $object->getDisplayId();
    }
    if (null !== $object->getEmail()) {
      $data->{'email'} = $object->getEmail();
    }
    if (null !== $object->getRequesterId()) {
      $data->{'requester_id'} = $object->getRequesterId();
    }
    if (null !== $object->getAssocProblemId()) {
      $data->{'assoc_problem_id'} = $object->getAssocProblemId();
    }
    if (null !== $object->getAssocChangeId()) {
      $data->{'assoc_change_id'} = $object->getAssocChangeId();
    }
    if (null !== $object->getAssocChangeCauseId()) {
      $data->{'assoc_change_cause_id'} = $object->getAssocChangeCauseId();
    }
    if (null !== $object->getAssocAssetId()) {
      $data->{'assoc_asset_id'} = $object->getAssocAssetId();
    }
    if (null !== $object->getSubject()) {
      $data->{'subject'} = $object->getSubject();
    }
    if (null !== $object->getDescription()) {
      $data->{'description'} = $object->getDescription();
    }
    if (null !== $object->getDescriptionHtml()) {
      $data->{'description_html'} = $object->getDescriptionHtml();
    }
    if (null !== $object->getStatus()) {
      $data->{'status'} = $object->getStatus();
    }
    if (null !== $object->getPriority()) {
      $data->{'priority'} = $object->getPriority();
    }
    if (null !== $object->getSource()) {
      $data->{'source'} = $object->getSource();
    }
    if (null !== $object->isDeleted()) {
      $data->{'deleted'} = $object->isDeleted();
    }
    if (null !== $object->isSpam()) {
      $data->{'spam'} = $object->isSpam();
    }
    if (null !== $object->getResponderId()) {
      $data->{'responder_id'} = $object->getResponderId();
    }
    if (null !== $object->getGroupId()) {
      $data->{'group_id'} = $object->getGroupId();
    }
    if (null !== $object->getTicketType()) {
      $data->{'ticket_type'} = $object->getTicketType();
    }
    if (null !== $object->getToEmail()) {
      $data->{'to_email'} = $object->getToEmail();
    }
    if (null !== $object->getCcEmail()) {
      $data->{'cc_email'} = $object->getCcEmail();
    }
    if (null !== $object->getEmailConfigId()) {
      $data->{'email_config_id'} = $object->getEmailConfigId();
    }
    if (null !== $object->isEscalated()) {
      $data->{'isescalated'} = $object->isEscalated();
    }
    if (null !== $object->getDueBy()) {
      $data->{'due_by'} = $object->getDueBy();
    }
    if (null !== $object->getId()) {
      $data->{'id'} = $object->getId();
    }
    if (null !== $object->getAttachments()) {
      $attachmentsFormatted = array();
      foreach ($object->getAttachments() as $attachment) {
        $attachmentsFormatted[] = json_decode($this->serializer->serialize($attachment, 'json'));
      }
      $data->{'attachments'} = $attachmentsFormatted;
    }
    if (null !== $object->getCategory()) {
      $data->{'category'} = $object->getCategory();
    }
    if (null !== $object->getSubCategory()) {
      $data->{'sub_category'} = $object->getSubCategory();
    }
    if (null !== $object->getItemCategory()) {
      $data->{'item_category'} = $object->getItemCategory();
    }

    return $data;
  }
}