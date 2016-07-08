<?php
namespace App\Controllers;

class Ajax_Controller extends Base_Controller
{

    protected function input($params = [])
    {
        parent::input();

        switch ($params['method']) {
            case 'upload_img':
                $this->upload_img();
                break;
            case 'test':
                $this->test();
                break;
        }
    }

    public function test(){
        echo "whoat a fuck";
    }

    public function upload_img(){

        $uploadDir = "images/";
        $types = array("image/gif","image/png","image/jpeg","image/pjpeg","image/x-png");
        $size = 2097152;
        $file = $_FILES['userfile']['name'];
        $res = array();
        if(!isset($file)){
            $res = array("answer" => "ошибка загрузки файла!!!");
            exit(json_encode($res));
        }
        if($_FILES['userfile']['size'] > $size ){
            $res = array("answer" => "ошибка загрузки файла,файл слишком большой!!!");
            exit(json_encode($res));
        }
        if(!in_array($_FILES['userfile']['type'],$types)){
            $res = array("answer" => "ошибка загрузки файла,не допустимое расширение файлов!!!");
            exit(json_encode($res));
        }

        if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadDir.$_FILES['userfile']['name'])){

            $res = array("answer" => "ok","file" => $_FILES['userfile']['name']);
            exit(json_encode($res));
        }
    }




}