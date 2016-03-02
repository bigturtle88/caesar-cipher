<?php

class ControllerMain extends Controller
{
    public $model;
    public $view;
    public $result;
    public $data = array();

    function __construct()
    {
        $this->view  = new View();

    }

    public function actionIndex()
    {
        $data['title'] = 'Caesar cipher';

        $this->view->generate($data, 'header.php');
        $this->view->generate($data, 'index.php');
        $this->view->generate($data, 'footer.php');
    }
}