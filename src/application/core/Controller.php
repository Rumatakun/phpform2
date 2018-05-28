<?php
namespace application\core;
use application\core\View;
use application\lib\Db;
abstract class Controller{

    public $route;
    public $view;
    public $acl;
    public function __construct($route)
    {
        $db= new Db;
        $this->route=$route;

        $this->view= new View($route);
        $this->model=$this->loadModel($route['controller']);
    }

    public function loadModel($name)
    {
        $path='application\models\\'.ucfirst($name);
        if(class_exists($path))
        {
            return new $path;
        }
    }


}