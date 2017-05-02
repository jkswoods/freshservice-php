<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NoteNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\Note') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\Note) {
      return true;
    }

    return false;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\Note;
    if (isset($data['id'])) {
      $object->setId($data['id']);
    }
    if (isset($data['body'])) {
      $object->setBody($data['body']);
    }
    if (isset($data['body_html'])) {
      $object->setBodyHtml($data['body_html']);
    }
    if (isset($data['attachments'])) {
      $deserializedAttachments = array();
      foreach ($data['attachments'] as $attachment) {
        $deserializedAttachments[] = $this->serializer->deserialize(json_encode($attachment), 'Freshservice\\Model\\Attachment', 'json');
      }
      $object->setAttachments($deserializedAttachments);
    }
    if (isset($data['user_id'])) {
      $object->setUserId($data['user_id']);
    }
    if (isset($data['private'])) {
      $object->setPrivate($data['private']);
    }
    if (isset($data['to_emails'])) {
      $object->setToEmails($data['to_emails']);
    }
    if (isset($data['deleted'])) {
      $object->setDeleted($data['deleted']);
    }
    if (isset($data['created_at'])) {
      $object->setCreatedAt($data['created_at']);
    }
    if (isset($data['updated_at'])) {
      $object->setUpdatedAt($data['updated_at']);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdclass();

    if (null !== $object->getId()) {
      $data->{'id'} = $object->getId();
    }
    if (null !== $object->getBody()) {
      $data->{'body'} = $object->getBody();
    }
    if (null !== $object->getBodyHtml()) {
      $data->{'body_html'} = $object->getBodyHtml();
    }
    if (null !== $object->getAttachments()) {
      $attachmentsFormatted = array();
      foreach ($object->getAttachments() as $attachment) {
        $attachmentsFormatted[] = json_decode($this->serializer->serialize($attachment, 'json'));
      }
      $data->{'attachments'} = $attachmentsFormatted;
    }
    if (null !== $object->getUserId()) {
      $data->{'user_id'} = $object->getUserId();
    }
    if (null !== $object->isPrivate()) {
      $data->{'private'} = $object->isPrivate();
    }
    if (null !== $object->getToEmails()) {
      $data->{'to_emails'} = $object->getToEmails();
    }
    if (null !== $object->isDeleted()) {
      $data->{'deleted'} = $object->isDeleted();
    }
    if (null !== $object->getCreatedAt()) {
      $data->{'created_at'} = $object->getCreatedAt();
    }
    if (null !== $object->getUpdatedAt()) {
      $data->{'updated_at'} = $object->getUpdatedAt();
    }

    return $data;
  }
}