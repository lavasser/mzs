<?php

/**
 * Created by PhpStorm.
 * User: kopyev
 * Date: 08.02.2018
 * Time: 15:54
 */
class controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    // действие (action), вызываемое по умолчанию
    function action_index()
    {
        // todo
    }
}