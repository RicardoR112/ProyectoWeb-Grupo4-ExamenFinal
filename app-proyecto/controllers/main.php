<?php

class Main extends SessionController
{

    function __construct()
    {
        parent::__construct();
        error_log('Main::construct-> inicio de Main');
    }

    function render()
    {
        $this->view->render('main/index');
    }
}
?>
