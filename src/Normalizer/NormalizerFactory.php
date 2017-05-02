<?php

namespace Freshservice\Normalizer;

class NormalizerFactory {

  /**
   * Returns the normalizers for serialization.
   */
  public function getNormalizers() {
    return array(
      new TicketNormalizer(),
      new TicketWrapperNormalizer(),
      new TicketCreateResponseNormalizer(),
      new AttachmentNormalizer(),
      new NoteNormalizer(),
      new NoteWrapperNormalizer(),
      new TicketFieldNormalizer(),
      new TicketFieldsWrapperNormalizer(),
    );
  }
}
