<?php

namespace Freshservice\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketWrapperNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Freshservice\\Model\\TicketWrapper') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Freshservice\Model\TicketWrapper) {
      return true;
    }

    return false;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Freshservice\Model\TicketWrapper;
    if (isset($data['helpdesk_ticket'])) {
      $object->setHelpdeskTicket($this->serializer->deserialize(json_encode($data['helpdesk_ticket']), 'Freshservice\\Model\\Ticket', 'json'));
    }
    if (isset($data['ticket'])) {
      $object->setHelpdeskTicket($this->serializer->deserialize(json_encode($data['ticket']), 'Freshservice\\Model\\Ticket', 'json'));
    }
    if (isset($data['cc_emails'])) {
      $object->setCcEmails(explode(',', $data['cc_emails']));
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdclass();

    if (isset($context['multipart'])) {
      if (null !== $object->getHelpdeskTicket()) {
        if (null !== $object->getHelpdeskTicket()->getSubject()) {
          $data->{'helpdesk_ticket[subject]'} = $object->getHelpdeskTicket()->getSubject();
        }
        if (null !== $object->getHelpdeskTicket()->getDescription()) {
          $data->{'helpdesk_ticket[description]'} = $object->getHelpdeskTicket()->getDescription();
        }
        if (null !== $object->getHelpdeskTicket()->getDescriptionHtml()) {
          $data->{'helpdesk_ticket[description_html]'} = $object->getHelpdeskTicket()->getDescriptionHtml();
        }
        if (null !== $object->getHelpdeskTicket()->getEmail()) {
          $data->{'helpdesk_ticket[email]'} = $object->getHelpdeskTicket()->getEmail();
        }
        foreach ($object->getHelpdeskTicket()->getAttachments() as $attachment) {
          $data->{'helpdesk_ticket[attachments][][resource]'} = $attachment->getResource();
        }
      }
    } else {
      if (null !== $object->getHelpdeskTicket()) {
        $data->{'helpdesk_ticket'} = json_decode($this->serializer->serialize($object->getHelpdeskTicket(), 'json'));
      }
    }
    if (null !== $object->getCcEmails()) {
      $data->{'cc_emails'} = implode(',', $object->getCcEmails());
    }

    return $data;
  }
}