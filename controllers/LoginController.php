<?php 

include_once "models/Loginuser.php";

class LoginController{

    public function acao($rotas){
        switch($rotas){
        case "login":
            $this->viewLogin();
        break;
        
        case "login-user":
            $this->loginUser();
        break;
        }
    }

    public function viewLogin(){
        include "views/login.php";
    }

    private function loginUser(){
        session_start();
        $email = $_POST['email'];
        //acessa tabela usuario
        $user = new Login();
        $resultado = $user->loginUser($email);

        $senha = password_verify($_POST['senha'], $resultado[0]['senha']);
      
        if($senha){
            $_SESSION['fake']['user'] = $resultado;
            header('Location:/fake-instagram-POO/posts');

        } else {
            $_SESSION['loginError'] = "NÃO LOGADO";
            header('Location:login');
        }
    }
}

?>