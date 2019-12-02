<?php 

include_once "models/User.php";

class CadastroController{

    public function acao($rotas){
        switch($rotas){
        case "cadastro":
            $this->viewCadastro();
        break;
        
        case "cadastrar-user":
            $this->cadastroUser();
        break;
        }
    }

    public function viewCadastro(){
        include "views/cadastro.php";
    }

    private function cadastroUser(){
        $nome = $_POST['nomeCompl'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        
        $user = new User();
        $resultado = $user->cadastroUser($nome, $email, $senha);
        if($resultado){
            header('Location:/fake-instagram-POO/login');
        }else {
            echo "ERRO!!!!!!";
        }
    }
}

?>