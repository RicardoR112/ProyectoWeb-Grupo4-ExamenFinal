<?php   
class ErrorMessages{
    //ERROR_CONTROLLER_METHOD_ACTION
    const ERROR_ADMIN_NEWCATEGORY_EXISTS = "3d25dd12e0a6eb0f375328f8dd9621ab";
    const ERROR_SIGNUP_NEWUSER = "e3a685973317b001fba95b1a0c4c646c";
    const ERROR_SIGNUP_NEWUSER_EMPTY = "7759bf872c057fce41a63632d2405bce";
    const ERROR_SIGNUP_NEWUSER_EXISTS = "6f5eef2ceca99d3da826f7cc3f119c3a";
    const ERROR_LOGIN_AUTHENTICATE_EMPTY = "697004b0219c5784ce99e18802f0ee44";
    const ERROR_LOGIN_AUTHENTICATE_DATA = "c343c9efac06bd723eae98ce065dbda3";
    const ERROR_LOGIN_AUTHENTICATE = "37c53b8d99120a88c290a7660cd3681d";
    private $errorList = [];
    public function __construct() 
    {
        $this->errorList = [ 
            ErrorMessages::ERROR_ADMIN_NEWCATEGORY_EXISTS => 'El nombre de la categoria ya existe',
            ErrorMessages::ERROR_SIGNUP_NEWUSER => 'Hubo un error al procesar la solicitud',
            ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY => 'El usuario y/o la contraseña estan vacias',
            ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS => 'Ya existe ese nombre de usuario',
            ErrorMessages::ERROR_LOGIN_AUTHENTICATE_EMPTY => 'Por favor, asegurese de llenar los campos de usuario y contraseña',
            ErrorMessages::ERROR_LOGIN_AUTHENTICATE_DATA => 'Nombre de usuario y/o contraseña incorrectos',
            ErrorMessages::ERROR_LOGIN_AUTHENTICATE => 'No se puede procesar la solicitud, ingresa usuario y password nuevamente'
        ];
    }

    public function get($hash){
        return $this->errorList[$hash];
    }

    public function existKey($key){
        if(array_key_exists($key, $this->errorList)){
            return true;
        }else{
            return false;
        }
    }

}
?>