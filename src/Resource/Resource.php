<?php
/**
 * Manager.php
 */

namespace Freshservice\Resource;

use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Freshservice\Normalizer\NormalizerFactory;

class Resource {

  protected $apiKey;
  protected $domain;
  protected $client;

  protected $serializer;

  /**
   * Class constructor.
   *
   * @param object $client
   */
  public function __construct($client) {
    $this->apiKey = $client->apiKey;
    $this->domain = $client->domain;
    $this->client = $client->client;

    $encoders = array(new JsonEncoder());
    $normalizers = (new NormalizerFactory)->getNormalizers();

    $this->serializer = new Serializer($normalizers, $encoders);
  }
  
  /**
   * Performs a GET request on the target endpoint.
   *
   * @param string $endpoint
   */
  public function get($endpoint) {
    return $this->client->request('GET', $endpoint, [
      'auth' => [$this->apiKey, 'X'],
    ]);
  }

  /**
   * Performs a POST request on the target endpoint.
   *
   * @param string $endpoint
   * @param string $body
   */
  public function post($endpoint, $body) {
    return $this->client->request('POST', $endpoint, [
      'auth' => [$this->apiKey, 'X'],
      'body' => $body,
      'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
      ],
    ]);
  }

  /**
   * Performs a POST request on the target endpoint with the added bonus of uploading files.
   *
   * @param string $endpoint
   * @param string $body
   */
  public function postMultipart($endpoint, $body) {
    $multipart = array();
    $body = json_decode($body);

    // Format the body into something that can be sent as a form multipart.
    foreach ($body as $key => $value) {
      if (strpos($key, '[attachments][][resource]') !== FALSE) {
        $multipart[] = [
          'name' => $key,
          'contents' => file_get_contents($value),
          'filename' => $value,
        ];
      } else {
        $multipart[] = [
          'name' => $key,
          'contents' => $value,
        ];
      }
    }

    try {
      return $this->client->request('POST', $endpoint, [
        'auth' => [$this->apiKey, 'X'],
        'headers' => ['Accept' => 'application/json'],
        'multipart' => $multipart,
      ]);
    } catch (RequestException $ex) {
      // Throw exception if bad request/response.
    }
  }

  /**
   * Performs a DELETE request on the target endpoint.
   *
   * @param string $endpoint
   */
  public function delete($endpoint) {
    return $this->client->request('DELETE', $endpoint, [
      'auth' => [$this->apiKey, 'X'],
    ]);
  }

  /**
   * Performs a PUT request on the target endpoint.
   *
   * @param string $endpoint 
   * @param string $body
   */
  public function put($endpoint, $body) {
    return $this->client->request('PUT', $endpoint, [
      'auth' => [$this->apiKey, 'X'],
      'body' => $body,
      'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
      ],
    ]);
  }

  /**
   * Checks whether a response has been properly authenticated.
   */
  public function checkAuthenticatedResponse($response) {
    if ((string)$response->getBody() != '{"require_login":true}') {
      return true;
    }

    throw new \Freshservice\Exception\AuthenticationException('Unable to authenticate with the supplied API key');
  }
}