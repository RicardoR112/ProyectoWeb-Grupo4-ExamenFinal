<?php   
require_once 'classes/session.php';
require_once 'models/userModel.php';
class SessionController extends Controller{
    private $userSession;
    private $username;
    private $userid;
    private $session;
    private $sites;
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->init();
    }

    function init(){

        if($this->session==null || empty($this->session)){
            $this->session = new Session();
            error_log('Cree nueva sesion');
        }
        $json = $this->getJSONFileConfig();
        $this->sites = $json['sites'];
        $this->defaultSites = $json['default-sites'];
        $this->validateSession();
    }

    private function getJSONFileConfig(){
        $string = file_get_contents('config/access.json');
        $json = json_decode($string,true);
        return $json;
    }

    public function validateSession(){
        error_log('SESSION_CONTROLLER:: validatesession()');
        if($this->existSession()){
           $role = $this->getUserSessionData()->getRole();
           error_log('existSession()-> VALIDANDO ROL:: '.$role);
           if($this->isPublic()){
              $this->redirectDefaultSiteByRole($role);
           }else{
               if($this->isAthorized($role)){
                 
               }else{
                $this->redirectDefaultSiteByRole($role);
               }
           }
        }else{

            if($this->isPublic()){

            }else{
                header('Location: '.constant('URL').'');
            }

        }
    }

    function existSession(){
        if(!$this->session->exists()){
           return false;
        }

        if($this->session->getCurrentUser()==null){
            return false;
         }

         $this->userid=$this->session->getCurrentUser();
         if($this->userid){
             return true;
         }else{
             return false;
         }
    }

    function getUserSessionData(){
        $id = $this->session->getCurrentUser();
        error_log('id user es '.$id);
        $this->user= new UserModel();
        $this->user->get($id);
        return $this->user;

    }

    function isPublic(){
        $currentUrl= $this->getCurrentPage();
        $currentUrl= preg_replace("/\?.*/","",$currentUrl);
        error_log("isPublic()-> URL Obtenida es ->'$currentUrl'");
        for($i=0;$i<sizeof($this->sites);$i++){
            if($currentUrl == $this->sites[$i]['site'] && $this->sites[$i]['access'] == 'public'){
                error_log('isPublic()->pagina publica');
                return true;
                 break;
            }

        }
        error_log('isPublic()->pagina no es publica');
        return false;
    }
   

    function getCurrentPage(){
        $actualLink= trim("$_SERVER[REQUEST_URI]");
        $url = explode('/',$actualLink);
        error_log("SESSION_CONTROLLER::getCurrentPage()");
        error_log('Se obtuvo la pagina actual->'.$url[2]);
        error_log('Se retorno el valor->'.$url[2]);
        return $url[2];
    }

    private function getUserSession(){
        return $this->session;
    }

   public function redirectDefaultSiteByRole($role){
       if($role ==0){
           $role = 'admin';
       }else if($role ==1){
        $role = 'calificador';
       }else{
        $role = 'estudiante';
       }
        $url = '';
        for($i=0;$i<sizeof($this->sites);$i++){
            if($this->sites[$i]['role'] == $role){
               $url = '/' . $this->sites[$i]['site'];
               error_log('redirectDefaultSiteByRole()----> '.$url);
               break;
            }
        }
        
        error_log('Location:'.constant('URL').$url);
        header('Location:'.constant('URL').$url);

    }

    private function isAthorized($role){

        if($role ==0){
            $role = 'admin';
        }else if($role ==1){
         $role = 'calificador';
        }else{
         $role = 'estudiante';
        }

        $currentUrl= $this->getCurrentPage();
        $currentUrl= preg_replace("/\?.*/","",$currentUrl);
        error_log('isAuthorized() -> currentUrl: '.$currentUrl);
        for($i=0;$i<sizeof($this->sites);$i++){
            if($currentUrl == $this->sites[$i]['site'] && $this->sites[$i]['role'] == $role){
                 return true;
                 break;
            }

        }return false;
       
    }

    function initialize($user){
       $this->session->setCurrentUser($user->getId());
       $this->authorizeAccess($user->getRole());
    }

    function authorizeAccess($role){
        if($role ==0){
            $role = 'admin';
        }else if($role ==1){
         $role = 'calificador';
        }else{
         $role = 'estudiante';
        }
        error_log('el rol ->'.$role);
        switch($role){
            case 'calificador':
                $this->redirect($this->defaultSites['calificador'],['success' => SuccessMessages::SUCCESS_LOGIN_AUTHENTICATE]);
                break;

                case 'admin':
                    $this->redirect($this->defaultSites['admin'],['success' => SuccessMessages::SUCCESS_LOGIN_AUTHENTICATE]);
                    break;

                    case 'estudiante':
                        $this->redirect($this->defaultSites['estudiante'],['success' => SuccessMessages::SUCCESS_LOGIN_AUTHENTICATE]);
                        break;
                     
        }

    }

    function logout(){
        error_log('entre a cerrar session');
        $this->session->closeSession();
        $this->redirect('', ['success' =>  SuccessMessages::SUCCESS_LOGOUT_USER]);
    }
}
?>