<?php

namespace Tops\Backmarket\Api;

use Illuminate\Support\Facades\Http;

class BaseApi
{
    protected $apiUrl;
    protected $apiKey;
    protected $secretKey;
    protected $sellerId;

    /**
     * Initialize newEgg credentials and base configurations.
     *
     * This method initializes the necessary API credentials and configurations such as the API endpoint,
     * API key, secret key, and seller ID to be used for making requests to the newEgg API.
     *
     * @param array $config Configuration array containing API endpoint, API key, secret key, and seller ID.
    */
    public function init($config = [])
    {
        $this->apiUrl    = $config['api_endpoint'] ?? null;
        $this->apiKey    = $config['api_key'] ?? null;
        $this->secretKey = $config['secret_key'] ?? null;
        $this->sellerId  = $config['seller_id'] ?? null;
    }
}
