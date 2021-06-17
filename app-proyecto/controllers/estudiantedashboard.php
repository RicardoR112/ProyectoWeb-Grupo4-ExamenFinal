<?php
require_once 'models/articuloModel.php';
class EstudianteDashboard extends SessionController
{
     private $user;
     private $articulos;
    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('AssistantDashboard::construct-> inicio de login');
    }

    function render()
    {    
        $articulos = $this->getArticulos();
        $this->view->render('estudiante-dashboard/index',[
            'user'=>$this->user,
            'articulos'=>$articulos    
        ]);
    }

    public function getArticulos(){
     if($this->articulos == null || empty($this->articulos)){
         $this->articulos = new ArticuloModel();
         $this->articulos = $this->articulos->getDataAllArticulos($this->user->getId());
     }

     return $this->articulos;

    }


 
} ?>