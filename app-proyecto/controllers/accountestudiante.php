<?php
require_once 'models/articuloModel.php';
class AccountEstudiante extends SessionController
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
    $this->view->render('account/index-estudiante', [
      'user'=>$this->user
    ]);
  }

  function upload()
  {

    $this->user->updateProfilePictureUser($this->user);

  }


  function savearticle(){

    if($this->article == null || empty($this->article)){
      $this->article = new ArticuloModel();
    }

    $array = [
      'id_estudiante'=>$this->user->getId(),
      'autor'=>$this->user->getNombres(),
      'id_calificador'=>$this->getPost('calificador'),
      'titulo'=>$this->getPost('titulo'),
      'palabras'=>$this->getPost('palabras'),
      'resumen'=>$this->getPost('resumen'),
      'topico'=>$this->getPost('topico'),
      'texto-articulo'=>$this->getPost('texto-completo')
    ];

    if($this->article->saveArticleByUser($array)){
      $this->redirect('addarticle',['success' => SuccessMessages::SUCCESS_REGISTER_ARTICLE_USER]);
    }

  }

}


?>