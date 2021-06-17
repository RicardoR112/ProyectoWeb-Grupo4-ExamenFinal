<?php
class Errores extends Controller{
    function __construct(){  
        parent::__construct();
        error_log('Errores::construct-> se inicio un error');
    }

    function render(){
        $this->view->render('errores/index');
    }
}
?>
