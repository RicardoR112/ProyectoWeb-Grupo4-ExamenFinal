<?php 
require_once 'models/userModel.php';
class NewUser extends SessionController{
    private $user;
    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    function render(){
        $this->view->render('signup/new-index',['user'=>$this->user]);
    }

    function newUserAdmin(){
        if($this->existPOST(['documento','password'])){
            $documento = $this->getPost('documento');
            $password = $this->getPost('password');
            if($documento == '' || empty($documento) || $password == '' || empty($password)){
                  $this-> redirect ('signup', ['error' =>ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
            }else{

            $user = new UserModel();
            $user->setNombres($this->getPost('nombres'));
            $user->setApellidos($this->getPost('apellidos'));
            $user->setPassword($password);
            $user->setEmail($this->getPost('email'));
            $user->setDocument($documento);
            $user->setTipoDoc($this->getPost('tipo_documento'));
            $user->setSexo($this->getPost('sexo'));
            $user->setFechaNac($this->getPost('fecha_nac'));
            
            
            

            if($user->exists($user->getDocument())){
               $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS]);
            }else if($user->save()){
                $this->redirect('login',['success'=>SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
            }else{
                $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
            }

        }

        }else{
            $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
        }
    }
}
?>