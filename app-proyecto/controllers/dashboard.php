<?php
require_once 'models/userModel.php';
class Dashboard extends SessionController
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
      
        $userDb = $this->user->getAll();

        
            $this->view->render('dashboard/index',[
                'user'=>$this->user,
                'usersDB'=>$userDb
            ]);
    }


    public function getUsers(){
        if($this->user == null){
            $this->user = new UserModel();
            
        }
         $usersDB= $this->user->getAll();
         return $usersDB;

    }

}
?>
