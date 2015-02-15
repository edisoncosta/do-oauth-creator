<?php

namespace WebStax;

use GuzzleHttp\Client;

class OauthClient
{
    /**
     * The endpoint.
     *
     * @var string
     */
    protected $endpoint = 'https://cloud.digitalocean.com/v1/oauth/token';

    /**
     * The client id suppied by DigitalOcean key.
     *
     * You can get a client id here: https://cloud.digitalocean.com/settings/applications/new
     *
     * @var string
     */
    protected $clientId;

    /**
     * The guzzle client.
     *
     * @var \GuzzleHttp\Client
     */
    protected $guzzleClient;

    /**
     * Create a new DigitalOcean Oauth client instance.
     *
     * @param string                  $clientId
     * @param \GuzzleHttp\Client|null $client
     *
     * @return void
     */
    public function __construct($clientId, Client $client = null)
    {
        $this->clientId = $clientId;
        $this->guzzleClient = $client ?: new Client();
    }
}
