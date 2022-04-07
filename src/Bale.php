<?php

namespace Bazofather\BaleBot;

class BaleBot
{

    /**
     * Bale bot current version
     *
     * @var string
     */
    private $version = '0.1.0';

    /**
     * Bale bot object
     *
     * @var object
     */
    private $botInstance;

    /**
     * Bale bot api token
     *
     * @var string
     */
    private $token;

    /**
     * Bale bot api url
     *
     * @var string
     */
    private $base_api_url = 'https://tapi.bale.ai/';

    /**
     * Bale bot file api url
     * for download - upload files
     *
     * @var string
     */
    private $base_file_url  = 'https://tapi.bale.ai/file/';

    public function __construct()
    {
        
    }

    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }

    public function token(): string
    {
        return $this->token;
    }
}
