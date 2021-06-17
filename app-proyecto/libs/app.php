<?php
require_once 'controllers/errores.php';
class App
{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);



        if (empty($url[0])) {
            error_log('APP::construct-> no hay controlador especificado');
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();

            $controller->render();
            error_log('APP::URL Inicial: ' . $archivoController);
            return false;
        } else {

            $archivoController = 'controllers/' . $url[0] . '.php';
            error_log('APP::URL Inicial: ' . $archivoController);

            if (file_exists($archivoController)) {
                error_log('Existe el controlador -> requiriendo ' . $archivoController);
                require_once $archivoController;
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                if (isset($url[1])) {
                    if (method_exists($controller, $url[1])) {

                        if (isset($url[2])) {
                            $nparam = count($url) - 2;
                            $nparams = [];
                            for ($i = 0; $i < $nparam; $i++) {
                                array_push($params, $url[$i] + 2);
                            }
                            error_log('APP:: ruta actual con parametos -> ' . $url[1] . ' ' . $params);
                            $controller->{$url[1]}($params);
                        } else {
                            error_log('APP:: ruta actual sin parametros -> ' . $url[1]);
                            $controller->{$url[1]}();
                        }
                    } else {

                        $controller = new Errores();
                        $controller->render();
                    }
                } else {
                    error_log('Render basico -> ' . $url[0]);
                    $controller->render();
                }
            } else {
                $controller = new Errores();
                $controller->render();
            }
        }
    }
}
