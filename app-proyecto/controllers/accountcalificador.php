
<?php
require_once 'models/articuloModel.php';
class AccountCalificador extends SessionController
{
  private $user;
  private $article;
  function __construct()
  {
    parent::__construct();
    if ($this->user == null || empty($this->user)) {
      $this->user = $this->getUserSessionData();
      error_log('Cree nuevo user');
    }
    error_log('Account::construct-> inicio de myAccountAssistant');
  }

  function render()
  {
    $this->view->render('account/index-calificador', [
      'user'=>$this->user
    ]);
  }


  function calificar(){
    if($this->existPOST(['calificacion','id_articulo'])){

      if($this->article ==null || empty($this->article)){
        $this->article = new ArticuloModel();
    }

   if ($this->article->calificarArticuloPorId($this->getPost('id_articulo'),$this->getPost('calificacion'))){
       echo 'Se Almaceno la calificacion para este articulo Correctamente!';
    }else{
      echo 'Ocurrio un error inesperado, revise que la nota este correcta';
    }

  }
}

  function upload()
  {

    $this->user->updateProfilePictureUser($this->user);

  }


  function download(){

    if($this->existGET(['id'])){
     $id_articulo = $this->getGET('id');
     if($this->article ==null || empty($this->article)){
         $this->article = new ArticuloModel();
     }
    }
    
    
    $this->article->downloadArticleById($id_articulo,$this->user->getNombres());
    }

}


?>


