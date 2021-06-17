<?php
require_once 'models/articuloModel.php';
class CalificadorDashboard extends SessionController
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
        $articulos = $this->getArticulosCalificador();
        $this->view->render('calificador-dashboard/index',[
            'user'=>$this->user,
            'articulos'=>$articulos    
        ]);
    }

    public function getArticulosCalificador(){
     if($this->articulos == null || empty($this->articulos)){
         $this->articulos = new ArticuloModel();
         $this->articulos = $this->articulos->getDataAllArticulosByCalificador($this->user->getId());
     }

     return $this->articulos;

    }


 
} ?>