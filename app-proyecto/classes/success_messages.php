<?php   
class SuccessMessages{
    const SUCCESS_LOGOUT_USER = "feed3467668a51b79fc9429fc71c44e8";
    const SUCCESS_SIGNUP_NEWUSER = "844e2da7dc81e14a2cae36fe7fd19e0e";
    const SUCCESS_LOGIN_AUTHENTICATE = "6bc5c24343d1e5af9f5e731337081c3d";
    const SUCCESS_UPDATEPROFILEIMAGE_USER = "d4a4a1cf3d150c20e08dcfcbb06fa189";
    CONST SUCCESS_DELETE_USER_ADMIN ="0461cb3a333177a82df16c33a608ed9e";
    const SUCCESS_REGISTER_ARTICLE_USER= "891ceb887ab4e038cf4213d5404bd20a";
    private $successList = [];
    public function __construct()
    {
        $this->successList = [ 
            SuccessMessages::SUCCESS_LOGOUT_USER => 'Sesión cerrada exitosamente',
            SuccessMessages::SUCCESS_SIGNUP_NEWUSER => 'Registro exitoso',
            SuccessMessages::SUCCESS_LOGIN_AUTHENTICATE => 'Bienvenido una vez mas',
            SuccessMessages::SUCCESS_UPDATEPROFILEIMAGE_USER => 'Se actualizo su foto de perfil correctamente',
            SuccessMessages::SUCCESS_DELETE_USER_ADMIN => 'Se elimino el usuario correctamente',
            SuccessMessages::SUCCESS_REGISTER_ARTICLE_USER =>'Se registro correctamente el articulo!'
        ];
    }

    public function get($hash){
        return $this->successList[$hash];
    }

    public function existKey($key){
        if(array_key_exists($key, $this->successList)){
            return true;
        }else{
            return false;
        }
    }
}
?>