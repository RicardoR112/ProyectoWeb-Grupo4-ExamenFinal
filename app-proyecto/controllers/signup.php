<?php 
require_once 'models/userModel.php';
class SignUp extends SessionController{
    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('signup/index',[]);
    }

    function newUser(){
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


    function newUserAdmin(){
        if($this->existPOST(['documento','password'])){
            $documento = $this->getPost('documento');
            $password = $this->getPost('password');
            if($documento == '' || empty($documento) || $password == '' || empty($password)){
                  $this-> redirect ('newuser', ['error' =>ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
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
            $user->setRole($this->getPost('tipo_user'));
            
            
            
            

            if($user->exists($user->getDocument())){
               $this->redirect('newuser',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS]);
            }else if($user->save()){
                $this->redirect('newuser',['success'=>SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
            }else{
                $this->redirect('newuser',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
            }

        }

        }else{
            $this->redirect('newuser',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
        }
    }
}
?>