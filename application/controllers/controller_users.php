<?php

/**
 * Created by PhpStorm.
 * User: kopyev
 * Date: 08.10.2018
 * Time: 17:49
 */
class ControllerUsers
{
    public $controller = '<br>Сработал класс ControllerUsers';

    function __construct()
    {
        echo $this->controller;
    }
}


$user = new ControllerUsers();