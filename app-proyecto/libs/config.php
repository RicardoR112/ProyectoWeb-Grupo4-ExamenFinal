<?php
require_once 'vendor/autoload.php';

class Config
{
    private $config = [];
    function __construct()
    {
    }


    function getConfig()
    {

        $this->config = [
            'callback' => 'http://' . $_SERVER["SERVER_NAME"] . '/panaderia-charito/loginsocial/receivedDataSocialMedia',
            'keys'     => [
                'id' => '172366263403-3a31dk1kjbeg5nrelst4vmv3eqs9raic.apps.googleusercontent.com',
                'secret' => '0O-YTlsC8Ge5ECeh1DpB8t08'
            ],
            'scope'    => 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
            'authorize_url_parameters' => [
                'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
                'access_type' => 'offline'
            ]
        ];

        return $adapter = new Hybridauth\Provider\Google($this->config);
    }

    function getConfigTwitter()
    {

        $config = [
            'callback' => 'http://' . $_SERVER["SERVER_NAME"] . '/panaderia-charito/loginsocial/receivedDataTwitterMedia',
            'keys'     => ['key' => 'TWITTER_CONSUMER_API_KEY', 'secret' => 'TWITTER_CONSUMER_API_SECRET_KEY'],
            'authorize' => true
        ];

        return $adapter = new Hybridauth\Provider\Twitter($config);
    }


    function getConfigFacebook()
    {

        $config = [
            'callback' => 'http://' . $_SERVER["SERVER_NAME"] . '/panaderia-charito/loginsocial/receivedDataFacebookMedia',
            'keys'     => ['id' => 'TWITTER_CONSUMER_API_KEY', 'secret' => 'TWITTER_CONSUMER_API_SECRET_KEY'],
            'authorize' => true
        ];

        return $adapter = new Hybridauth\Provider\Facebook($config);
    }
}
