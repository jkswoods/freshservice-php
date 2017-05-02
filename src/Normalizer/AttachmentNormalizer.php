<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AttachmentNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {

  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\Attachment') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\Attachment) {
      return true;
    }

    return false;
  }

  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\Attachment;
    if (isset($data['content_content_type'])) {
      $object->setContentContentType($data['content_content_type']);
    }
    if (isset($data['content_file_name'])) {
      $object->setContentFilename($data['content_file_name']);
    }
    if (isset($data['content_file_size'])) {
      $object->setContentFilesize($data['content_file_size']);
    }
    if (isset($data['created_at'])) {
      $object->setCreatedAt($data['created_at']);
    }
    if (isset($data['id'])) {
      $object->setId($data['id']);
    }
    if (isset($data['updated_at'])) {
      $object->setUpdatedAt($data['updated_at']);
    }
    if (isset($data['attachment_url'])) {
      $object->setAttachmentUrl($data['attachment_url']);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdclass();

    if (null !== $object->getContentContentType()) {
      $data->{'content_content_type'} = $object->getContentContentType();
    }
    if (null !== $object->getContentFilename()) {
      $data->{'content_file_name'} = $object->getContentFilename();
    }
    if (null !== $object->getContentFilesize()) {
      $data->{'content_file_size'} = $object->getContentFilesize();
    }
    if (null !== $object->getCreatedAt()) {
      $data->{'created_at'} = $object->getCreatedAt();
    }
    if (null !== $object->getId()) {
      $data->{'id'} = $object->getId();
    }
    if (null !== $object->getUpdatedAt()) {
      $data->{'updated_at'} = $object->getUpdatedAt();
    }
    if (null !== $object->getAttachmentUrl()) {
      $data->{'attachment_url'} = $object->getAttachmentUrl();
    }
    if (null !== $object->getResource()) {
      $data->{'resource'} = '@' . $object->getResource();
    }

    return $data;
  }
}