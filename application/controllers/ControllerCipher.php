<?php
require_once("application/helpers/HelperCaesarCipher.php");

class ControllerCipher extends Controller
{
    public $model;
    public $view;
    public $result = array();
    public $dataJSON;
    public $data;

    function __construct()
    {
    }

    public function actionIndex()
    {
    }

    public function actionEncode()
    {
        $dataJSON       = ! empty($_POST['dataJSON']) ? $_POST['dataJSON'] : null;
        $data           = json_decode($dataJSON);
        $cipher         = new CaesarCipher($data->text, $data->rot);
        $result['data'] = $cipher->caesarEncode();
        echo json_encode($result['data']);
    }

    public function actionDecode()
    {
        $dataJSON       = ! empty($_POST['dataJSON']) ? $_POST['dataJSON'] : null;
        $data           = json_decode($dataJSON);
        $cipher         = new CaesarCipher($data->text, $data->rot);
        $result['data'] = $cipher->caesarDecode();
        echo json_encode($result['data']);
    }
}