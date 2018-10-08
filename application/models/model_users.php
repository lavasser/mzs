<?php

/**
 * Created by PhpStorm.
 * User: kopyev
 * Date: 08.10.2018
 * Time: 17:30
 */
class ModelUsers
{
    public $user = '<br>Сработал класс ModelUsers';

    function __construct()
    {
        echo $this->user;
    }

}


$user = new ModelUsers();