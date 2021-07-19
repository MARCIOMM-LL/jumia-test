<?php

namespace App\Core\Helpers;

class Controller
{
    protected function view($name, $data = [])
    {
        extract($data);

        return require "../assets/views/{$name}.view.php";
    }
}