<?php

class Login extends SessionController
{

  function __construct()
  {
    parent::__construct();
    error_log('Login::construct-> inicio de login');
  }

  function render()
  {
    $this->view->render('login/index');
  }

  function authenticate()
  {

    if($this->existPOST(['email','password'])){
      $email = $this->getPost('email');
      $password = $this->getPost('password');

      //error_log('document getPost(' . $document . ')');
      //error_log('Password getPost(' . $password . ')');

      if ($email == '' || empty($email  || $password == '' || empty($password))) {
        error_log('ErrorMessages::ERROR_LOGIN_AUTHENTICATE_EMPTY');
        $this->redirect('login', ['error' => ErrorMessages::ERROR_LOGIN_AUTHENTICATE_EMPTY]);
      } else {
        $myUser = $this->model->login($email, $password);

        if ($myUser !== NULL) {
          $this->initialize($myUser);
        } else {
          error_log('ErrorMessages::ERROR_LOGIN_AUTHENTICATE_DATA ');
          $this->redirect('login', ['error' => ErrorMessages::ERROR_LOGIN_AUTHENTICATE_DATA]);
        }
      }
    } else {
      error_log('ErrorMessages::ERROR_LOGIN_AUTHENTICATE ');
      $this->redirect('login', ['error' => ErrorMessages::ERROR_LOGIN_AUTHENTICATE]);
    }
  }
}
?>
