<?php
/**
 * Freshservice PHP
 */

namespace Freshservice;

class Client {

  public $apiKey;
  public $domain;

  public $client;

  /**
   * Class constructor.
   *
   * @param string $apiKey - The API key provided in your Freshservice account.
   * @param string $domain - Freshservice provided domain e.g. http://domain.freshservice.com
   */
  public function __construct($apiKey, $domain) {
    $this->apiKey = $apiKey;
    $this->domain = $domain;

    $this->client = new \GuzzleHttp\Client([
      'base_uri' => $this->domain,
      'timeout'  => 2.0,
    ]);
  }

  /**
   * Create and return a new TicketResource.
   *
   * @return \Freshservice\Resource\TicketResource
   */
  public function getTicketResource() {
    return new \Freshservice\Resource\TicketResource($this);
  }
}