<?php 

  error_reporting(E_ALL);
  ini_set('ignore_repeated_errors',TRUE);
  ini_set('display_errors',FALSE);
  ini_set('log_errors',TRUE);
  ini_set("error_log", $_SERVER['DOCUMENT_ROOT'].'/app-proyecto/php_error.log');
  ini_set("memory_limit",-1);
  set_time_limit(300);
  error_log("Inicio de app web");
  

  require_once 'libs/database.php';
  require_once 'classes/error_messages.php';
  require_once 'classes/success_messages.php';
  require_once 'libs/controller.php';
  require_once 'libs/model.php';
  require_once 'libs/view.php';
  require_once 'controllers/session.php';
  require_once 'libs/app.php';
  require_once 'config/config.php';

  $app = new App();

?>