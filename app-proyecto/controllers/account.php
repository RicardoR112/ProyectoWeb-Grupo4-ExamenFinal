<?php
require_once 'models/userModel.php';
class Account extends SessionController
{
  private $user;
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
    $this->view->render('account/index', [
      'user'=>$this->user
  ]);
  }

  function upload()
  {
  
     $this->user->updateProfilePictureUser($this->user);
   
    
  }

  function updatedataprofile(){
    if($this->existPOST(['nombres','apellidos','email','document','tipo_document','fecha_nac','sexo'])){
        $id = $this->user->getId();
        $nombres= $this->getPost('nombres');
        $apellidos=  $this->getPost('apellidos');
        $email = $this->getPost('email');
        $document =$this->getPost('document');
        $tipo_document = $this->getPost('tipo_document');
        $fecha_nac = $this->getPost('fecha_nac');
        $sexo = $this->getPost('sexo');
        error_log('entre');
       
       if($this->user->updateData($id,$nombres,$apellidos,$email,$document,$tipo_document,$fecha_nac,$sexo)){
         error_log('correcto act');
        echo 'Se actualizaron los datos correctamente';
       
       }else{
        
        echo 'Ah ocurrido un error inesperado, vuelva a intentarlo';
        error_log('no correct');
       }
        
    }
  }

  function deleteUserById(){

    if($this->existGET(['id'])){
      if($this->user->delete( $this->getGET('id'))){
        $this->redirect('dashboard', ['success' => SuccessMessages::SUCCESS_DELETE_USER_ADMIN]);
      }
     
    }

  }

  function editUserByAdmin(){

    if($this->existPOST(['id_user','tipo_user'])){
     if($this->user->updateUserByAdmin($this->getPost('id_user'), $this->getPost('tipo_user'), $this->getPost('nombres'), $this->getPost('apellidos'), $this->getPost('email'), $this->getPost('documento'), $this->getPost('tipo_documento'))){ 
        echo 'Usuario actualizado, recargue la pagina para ver cambios!';
     }else{
      echo 'No se pudo actualizar, ocurrio un error inesperado';
     }
      
    }

  }
}
?>
