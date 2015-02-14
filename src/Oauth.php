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
     * Create a new forecast instance.
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
     * Returns the currently array.
     *
     * @return array
     */
    public function currently()
    {
        return $this->data['currently'];
    }

}
