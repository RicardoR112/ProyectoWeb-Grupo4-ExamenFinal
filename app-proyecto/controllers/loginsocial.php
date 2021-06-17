<?php
require_once 'libs/config.php';
class LoginSocial extends SessionController{
    private $dataUser;
    private $adapter;
    function __construct()
    {
        parent::__construct();
        error_log('LoginSocial::construct-> inicio de login social');
    }



    function authenticateBySocialMedia()
    {

        try {
            error_log('entre a  google casi');
            $this->adapter = new Config();
            $config = $this->adapter->getConfig();
            $config->authenticate();
            $this->dataUser=$config;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function receivedDataSocialMedia(){

        try {
            
            $this->adapter = new Config();
            $config = $this->adapter->getConfig();
            $config->authenticate();
            $userProfile = $config->getUserProfile();
            error_log($userProfile->displayName);
            error_log($userProfile->email);
            error_log($userProfile->emailVerified);
            error_log($userProfile->profileURL);
            error_log($userProfile->phone);
            error_log($userProfile->age);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
       
    }
    function receivedDataTwitterMedia(){
        try {
            $this->adapter = new Config();
            $config = $this->adapter->getConfigTwitter();
            $config->authenticate();
            $userProfile = $config->getUserProfile();
            error_log($userProfile->displayName);
            error_log($userProfile->email);
            error_log($userProfile->emailVerified);
            error_log($userProfile->profileURL);
            error_log($userProfile->phone);
            error_log($userProfile->age);
        }
        catch( Exception $e ){
            echo $e->getMessage() ;
        }
    }
}
