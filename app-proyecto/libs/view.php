<?php 
class View{
var $message='success';
var $mostrar=1;
    function __construct()
    {
        
    }

    function render($viewName, $data = [] ){
         $this->data = $data;
         $this->handleMessages();
         require 'views/'.$viewName.'.php';
    }

    private function handleMessages(){
        if(isset($_GET['success']) && isset($_GET['error'])){

        }else if(isset($_GET['success'])){
            $this->handleSuccess();
        }else if(isset($_GET['error'])){
            $this->handleError();
            $this->message='error';
        }
    }
    private function mostrar(){
        return $this->mostrar;
    }

    private function setMostrar($var){
        $this->mostrar=$var;
    }
    private function isSuccess(){
        return $this->message;
    }

    private function existMessages(){

        if(empty($this->data)){
            return false;
        }else{return true;}
    }

    private function handleError(){
        $hash = $_GET['error'];
        $error = new ErrorMessages;
        if($error->existKey($hash)){
            $this->data['error'] = $error->get($hash);
        }
    }

    private function handleSuccess(){
        $hash = $_GET['success'];
        $success = new SuccessMessages;

        if($success->existKey($hash)){
            $this->data['success'] = $success->get($hash);
        }
    }

    public function showMessages(){
        $this->showErrors();
        $this->showSuccess();
    }

    public function showErrors(){
      if(array_key_exists('error', $this->data)){
          echo $this->data['error'];
      }
    }

    public function showSuccess(){
        if(array_key_exists('success', $this->data)){
            echo $this->data['success'];
        }

    }

}
