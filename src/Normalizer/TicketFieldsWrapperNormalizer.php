<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketFieldsWrapperNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {

  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\TicketFieldsWrapper') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\TicketFieldsWrapper) {
      return true;
    }

    return false;
  }

  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\TicketFieldsWrapper;
    if (!empty($data)) {
      $ticketFields = array();
      foreach ($data as $ticketField) {
        $ticketFields[] = $this->serializer->deserialize(json_encode($ticketField['ticket_field']), 'Freshservice\\Model\\TicketField', 'json');
      }
      $object->setTicketFields($ticketFields);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdclass();

    if (null !== $object->getTicketFields()) {
      $ticketFields = array();
      foreach ($object->getTicketFields() as $ticketField) {
        $ticketFields[]['ticket_field'] = json_decode($this->serializer->serialize($ticketField, 'json'));
      }
      $data->{'ticket_fields'} = $ticketFields;
    }

    return $data;
  }
}