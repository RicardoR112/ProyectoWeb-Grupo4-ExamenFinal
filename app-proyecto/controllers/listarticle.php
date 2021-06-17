<?php
require_once 'models/articuloModel.php';
class ListArticle extends SessionController
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
        $articulos = $this->getDataArticle();
        $this->view->render('list-article/index',[
            'user'=>$this->user,
            'articulos'=>$articulos    
        ]);
    }

    public function getDataArticle(){
     if($this->articulos == null || empty($this->articulos)){
         $this->articulos = new ArticuloModel();
         $this->articulos = $this->articulos->getDataAllArticulosbyAdmin();
     }

     return $this->articulos;

    }


 
} ?>