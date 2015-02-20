<?php

namespace WebStax;

class Oauth
{
    /**
     * The raw data.
     *
     * @var array
     */
    protected $data;

    /**
     * Create a new oAuth instance.
     *
     * @param array $data
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Returns the data array.
     *
     * @return array
     */
    public function results()
    {
        return $this->data;
    }

    // https://cloud.digitalocean.com/v1/oauth/token?client_id=CLIENT_ID&client_secret=CLIENT_SECRET&grant_type=authorization_code&code=AUTHORIZATION_CODE&redirect_uri=CALLBACK_URL



}
