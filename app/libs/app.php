<?php
require_once 'ruteo.php';

class App
{
    function __construct()
    {
        $ruteo = new Ruteo();

        $patron = ['/_/', '/-/'];
        $this->controlador = preg_replace($patron, "", $ruteo->get_controlador()) . 'Controller';
        $this->method = $ruteo->get_method();
        $this->params = $ruteo->get_params();
    
        $this->load_session();
        $this->load_controller();
    }

    function load_controller()
    {
        $path = CONTROLLERS . $this->controlador . '.php';
        if (file_exists($path)) {
            require_once $path;
            $class = new $this->controlador();
            if (method_exists($class, $this->method)) {
                if (empty($this->params)) {
                    call_user_func([$class, $this->method]);
                } else {
                    call_user_func_array([$class, $this->method], $this->params);
                }
            } else {
                $this->page_not_found(402);
            }
        } else {
            $this->page_not_found();
        }
    }

    function load_session()
    {
        session_start();
    }

    function page_not_found($code = 404)
    {
        echo "<h1>Error $code</h1>";
    }
}
