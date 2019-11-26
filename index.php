<?php

    $rotas = key($_GET)?key($_GET):"posts";


    switch($rotas){
        case "posts":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "formulario-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "cadastrar-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "cadastrar-user":
            include "controllers/CadastroController.php";
            $controller = new CadastroController();
            $controller->acao($rotas);
        break;

        case "cadastro":
            include "controllers/CadastroController.php";
            $controller = new CadastroController();
            $controller->acao($rotas);
        break;

        case "login-user": //para pegar as informções
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
        break;

        case "login": //visualizar
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
        break;

        case "logout":
            include "controllers/LogoutController.php";
            $controller = new LogoutController();
            $controller->acao($rotas);
        break;
    }