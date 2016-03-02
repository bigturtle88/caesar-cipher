<?php
class ControllerE404 extends Controller
{
    public $model;
    public $view;
    public $data = array();

    function __construct()
    {
        $this->view  = new View();
        $this->model = new Model();
    }

    public function actionIndex()
    {
        $data['result'] = '404!';

        $this->view->generate($data, 'header.php');
        $this->view->generate($data, 'e404.php');
        $this->view->generate($data, 'footer.php');
    }
}