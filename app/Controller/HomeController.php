<?php

namespace Syahridho\PhpMvc\Controller;

use Syahridho\PhpMvc\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            'title' => 'Belajar PHP MVC',
            'description' => 'Belajar PHP MVC Programmer Zaman Now',
        ];

        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Hallo, Syahridho";
    }

    function login(): void
    {
        $request = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        $user = [

        ];

        $response = [
            'message' => 'Login Success'
        ];

        //kirimkan ke view
    }
}