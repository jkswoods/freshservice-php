<?php
/**
 * TicketManager.php
 *
 * Actions associated with Ticketing.
 */

namespace Freshservice\Resource;

class TicketResource extends Resource {

  /**
   * Create a ticket.
   *
   * @param \Freshservice\Model\Ticket $ticket - The content of the ticket.
   */
  public function createTicket(\Freshservice\Model\TicketWrapper $ticket) {
    $response = '';
    if (!is_null($ticket->getHelpdeskTicket()->getAttachments())) {
      // Perform the request with the attachments to be sent.
      $body = $this->serializer->serialize($ticket, 'json', ['multipart' => true]);
      $response = $this->postMultipart('/helpdesk/tickets.json', $body);
    } else {
      // Perform the request without the attachments.
      $body = $this->serializer->serialize($ticket, 'json');
      $response = $this->post('/helpdesk/tickets.json', $body);
    }

    // Check the response is authenticated before attempting to deserialize.
    if ($this->checkAuthenticatedResponse($response)) {
      $ticket = $this->serializer->deserialize((string)$response->getBody(), 'Freshservice\\Model\\TicketCreateResponse', 'json');
      // Return the deserialized result.
      return $ticket;
    }
  }

  /**
   * Update a ticket.
   *
   * Endpoint: /helpdesk/tickets/[id].json
   *
   * @param \Freshservice\Model\Ticket $ticket - The content of the ticket.
   * @param int $id - Ticket ID.
   */
  public function updateTicket(\Freshservice\Model\TicketWrapper $ticket, $id) {
    // Serialize the ticket in to something that can be interpreted by the API.
    $ticket = $this->serializer->serialize($ticket, 'json');

    // Perform the request.
    $response = $this->put('/helpdesk/tickets/' . $id . '.json', $ticket);

    // Check the response is authenticated before attempting to deserialize.
    if ($this->checkAuthenticatedResponse($response)) {
      $ticket = $this->serializer->deserialize((string)$response->getBody(), 'Freshservice\\Model\\TicketWrapper', 'json');
      // Return the deserialized result.
      return $ticket;
    }
  }

  /**
   * Delete a single ticket.
   *
   * Endpoint: /helpdesk/tickets/[id].json
   */
  public function deleteTicket($id) {
    // Perform the request.
    $response = $this->delete('/helpdesk/tickets/' . $id . '.json');

    // Check the response is authenticated before returning the status.
    if ($this->checkAuthenticatedResponse($response)) {
      if ($response->getStatusCode() == '200') {
        // Return true if the request went ahead without an error.
        return true;
      }
      return false;
    }
  }

  /**
   * Retrieve a single ticket.
   *
   * Endpoint: /helpdesk/tickets/[id].json
   *
   * @param int $id - Ticket ID.
   */
  public function viewSingle($id) {
    // Perform the request.
    $response = $this->get('/helpdesk/tickets/' . $id . '.json');

    // Check the response is authenticated before attempting to deserialize.
    if ($this->checkAuthenticatedResponse($response)) {
      $ticket = $this->serializer->deserialize((string)$response->getBody(), 'Freshservice\\Model\\TicketWrapper', 'json');
      // Return the deserialized result.
      return $ticket;
    }
  }

  /**
   * Returns an array of tickets.
   *
   * Endpoint: /helpdesk/tickets.json
   *
   * @param \Freshservice\Model\TicketFilter $filter - Configurable filter.
   */
  public function viewMultiple(\Freshservice\Model\TicketFilter $filter) {
    // Todo
  }

  /**
   * Returns an array of available ticket fields.
   *
   * Endpoint: /ticket_fields.json
   */
  public function getTicketFields() {
    // Perform the request.§
    $response = $this->get('/ticket_fields.json');

    // Check the response is authenticated before attempting to deserialize.
    if ($this->checkAuthenticatedResponse($response)) {
      $fields = $this->serializer->deserialize((string)$response->getBody(), 'Freshservice\\Model\\TicketFieldsWrapper', 'json');
      // Return the deserialized result.
      return $fields;
    }
  }

  /**
   * Creates a new note.
   *
   * Endpoint: /helpdesk/tickets/[id]/conversations/note.json
   *
   * @param \Freshservice\Model\NoteWrapper $note
   * @param int $id - Display ID of the ticket.
   */
  public function addNote(\Freshservice\Model\NoteWrapper $note, $id) {
    $response = '';
    if (!is_null($note->getHelpdeskNote()->getAttachments())) {
      // Perform the request with the attachments to be sent.
      $body = $this->serializer->serialize($note, 'json', ['multipart' => true]);
      $response = $this->postMultipart('/helpdesk/tickets/' . $id . '/conversations/note.json', $body);
    } else {
      // Perform the request without the attachments.
      $body = $this->serializer->serialize($note, 'json');
      $response = $this->post('/helpdesk/tickets/' . $id . '/conversations/note.json', $body);
    }

    // Check the response is authenticated before attempting to deserialize.
    if ($this->checkAuthenticatedResponse($response)) {
      $note = $this->serializer->deserialize((string)$response->getBody(), 'Freshservice\\Model\\NoteWrapper', 'json');
      // Return the deserialized result.
      return $note;
    }
  }
}
