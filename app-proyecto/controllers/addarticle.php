<?php
require_once 'models/userModel.php';
class AddArticle extends SessionController
{
     private $user;
     
    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('AdminDashboard::construct-> inicio de login');
    }

    function render()
    {    error_log('Dashboard::construct-> carga vista dashboard');
      
        

           $calificadores = $this->user->getAllCalificadores();
            $this->view->render('add-article/index',[
                'user'=>$this->user,
                'calificadores'=>$calificadores
            ]);
    }

}

?>