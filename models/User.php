<?php 

include_once "Conexao.php";

class User extends Conexao {
    function cadastroUser($nome, $email, $senha){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO users (nomeCompl, email, senha) values (?, ?, ?)");
        return $query->execute([$nome, $email, $senha]);
    }
}

?>