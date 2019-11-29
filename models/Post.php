<?php

include_once "Conexao.php";


class Post extends Conexao {


    public function criarPost($users_id, $image, $descricao){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO posts (users_id, img, descricao) values(?, ?,?)");
        return $query->execute([$users_id, $image, $descricao]);
    }

    // public function listarPosts(){
    //     $db = parent::criarConexao();
    //     $query = $db->query('SELECT * FROM posts ORDER BY id DESC');
    //     $resultado = $query->fetchAll(PDO::FETCH_OBJ);
    //     return $resultado;
    // }

     public function listarPosts(){
         $db = parent::criarConexao();
         $query = $db->query('SELECT posts.img, posts.descricao, users.nomeCompl from posts LEFT JOIN users ON posts.users_id = users.id ORDER BY posts.id DESC');
         $resultado = $query->fetchAll(PDO::FETCH_OBJ);
         return $resultado;
    }

}