<?php

include_once "Conexao.php";


class Post extends Conexao {


    public function criarPost($users_id, $image, $descricao){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO posts (users_id, img, descricao) values(?, ?,?)");
        return $query->execute([$users_id, $image, $descricao]);
    }

    public function listarPosts(){
        $db = parent::criarConexao();
        $query = $db->query('SELECT * FROM posts ORDER BY id DESC');
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function retornarUser($users_id){
        $db = parent::criarConexao();
        $query = $db->query("SELECT nomeCompl FROM users WHERE id = $users_id");
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

}