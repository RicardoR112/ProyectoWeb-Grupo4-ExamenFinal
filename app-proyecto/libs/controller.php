<?php   
class Controller{

    function __construct()
    {
        $this->view = new View();
    }

    function loadModel($modelName){
        $modelName = $modelName.'Model';
        $url = 'models/'.$modelName.'.php';

        if(file_exists($url)){
            require_once $url;
            $this->model = new $modelName();
        }

    }

    function existPOST($params){
        foreach($params as $param){
            if(!isset($_POST[$param])){
                error_log('CONTROLLER::existPOST->  No existe el parametro '.$param);
                return false;
            }
            error_log('CONTROLLER::existPOST-> Existe el parametro '.$param);
            
        }
        
        return true;
    }


    function existGET($params){
        foreach($params as $param){
            error_log($param);
            if(!isset($_GET[$param])){
                error_log('CONTROLLER::existGET-> No existe el parametro '.$param);
                return false;
            }
        }
        return true;
    }

    function getGET($name){
        return $_GET[$name];
    }

    function getPOST($name){
        return $_POST[$name];
    }

    function redirect($route, $mensajes){
           $data = [];
           $params = '';

           foreach($mensajes as $key =>$mensaje){
                array_push($data, $key .'='.$mensaje);
                error_log($key.'='.$mensaje);
           }

           $params = join('&',$data);

           if($params !=''){
               $params = '?'.$params;
           }
            error_log("Redirigiendo a:".constant('URL').'/'.$route.$params);
           header('Location: '.constant('URL').'/'.$route.$params);
    }

}
?>