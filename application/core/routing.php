<?php

class Routing
{
    protected
    static $router = array();

    static function execute()
    {
        $args = self::get_args();
        empty($args[0]) ? $controllerName = 'main' : $controllerName = $args[0];
        empty($args[1]) ? $actionName = 'index' : $actionName = $args[1];
        empty($args[2]) ? $parameter = null : $parameter = $args[2];
        $modelName = 'Model' . ucfirst(strtolower($controllerName));
        $controllerName
                           =
            'Controller' . ucfirst(strtolower($controllerName));
        $actionName        = 'action' . ucfirst(strtolower($actionName));
        $fileWithModel     = $modelName . '.php';
        $fileWithModelPath = "application/models/" . $fileWithModel;
        if (file_exists($fileWithModelPath)) {
            require_once($fileWithModelPath);
        }
        $fileWithController = strtolower($controllerName) . '.php';
        $fileWithControllerPath
                            = "application/controllers/" . $fileWithController;
        if (file_exists($fileWithControllerPath)) {
            require_once($fileWithControllerPath);
        } else {
            $controllerName = 'ControllerE404';
            require_once('application/controllers/controllerE404.php');
        }
        $controller = new $controllerName;
        $action     = $actionName;
        if (method_exists($controller, $action) != false) {
            call_user_func(array($controller, $action), $parameter);
        } else {
            require_once('application/controllers/controllerE404.php');
            $controller = new ControllerE404;
            $action     = 'actionIndex';
            call_user_func(array($controller, $action));
        }
    }

    private function get_args()
    {
        $prefix_str = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
        if ($prefix_str !== '/') {
            $args = '/' . str_replace($prefix_str, '', $_SERVER['REQUEST_URI']);
        } else {
            $args = '/' . $_SERVER['REQUEST_URI'];
        }
        $args = ltrim($args, '/');
        $args = explode('/', $args);

        return $args;
    }
}

