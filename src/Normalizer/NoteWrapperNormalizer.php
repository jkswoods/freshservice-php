<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NoteWrapperNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\NoteWrapper') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\NoteWrapper) {
      return true;
    }

    return false;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\NoteWrapper;
    if (isset($data['helpdesk_note'])) {
      $object->setHelpdeskNote($this->serializer->deserialize(json_encode($data['helpdesk_note']), 'Freshservice\\Model\\Note', 'json'));
    }
    if (isset($data['note'])) {
      $object->setHelpdeskNote($this->serializer->deserialize(json_encode($data['note']), 'Freshservice\\Model\\Note', 'json'));
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdclass();

    if (isset($context['multipart'])) {
      if (null !== $object->getHelpdeskNote()) {
        if (null !== $object->getHelpdeskNote()->getBody()) {
          $data->{'helpdesk_note[body]'} = $object->getHelpdeskNote()->getBody();
        }
        if (null !== $object->getHelpdeskNote()->getBodyHtml()) {
          $data->{'helpdesk_note[body_html]'} = $object->getHelpdeskNote()->getBodyHtml();
        }
        if (null !== $object->getHelpdeskNote()->isPrivate()) {
          $data->{'helpdesk_note[private]'} = $object->getHelpdeskNote()->isPrivate();
        }
        foreach ($object->getHelpdeskNote()->getAttachments() as $attachment) {
          $data->{'helpdesk_note[attachments][][resource]'} = $attachment->getResource();
        }
      }
    } else {
      if (null !== $object->getHelpdeskNote()) {
        $data->{'helpdesk_note'} = json_decode($this->serializer->serialize($object->getHelpdeskNote(), 'json'));
      }
    }

    return $data;
  }
}