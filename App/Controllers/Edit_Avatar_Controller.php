<?php
/**
 * Created by PhpStorm.
 * User: Димон
 * Date: 08.07.2016
 * Time: 9:33
 */

namespace App\Controllers;


class Edit_Avatar_Controller extends Base_Controller
{

    protected $article;


    protected function input($params = array()){
        parent::input();

        ;

    }

    protected function output(){

        $this->content = $this->render(array(),
            'App/Views/blocks/edit_avatar_content');

        $this->page = parent::output();
    }



}