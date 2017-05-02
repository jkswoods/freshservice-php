<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketCreateResponseNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\TicketCreateResponse) {
      return true;
    }

    return false;
  }

  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\TicketCreateResponse') {
      return false;
    }

    return true;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdclass();

    if (null !== $object->getStatus()) {
      $data->{'status'} = $object->getStatus();
    }
    if (null !== $object->getItem()) {
      $data->{'item'} = json_decode($this->serializer->serialize($object->getItem(), 'json'));
    }

    return $data;
  }

  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\TicketCreateResponse;
    if (isset($data['status'])) {
      $object->setStatus($data['status']);
    }
    if (isset($data['item'])) {
      $object->setItem($this->serializer->deserialize(json_encode($data['item']), 'Freshservice\\Model\\TicketWrapper', 'json'));
    }

    return $object;
  }
}