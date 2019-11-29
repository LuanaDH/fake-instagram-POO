<?php 

session_start();

include_once "models/Post.php";

class PostController {

    public function acao($rotas){
        switch($rotas){
            case "posts":
               $this->listarPosts();
            break;
            case "formulario-post":
                $this->viewFormularioPost();
            break;
            case "cadastrar-post":
                $this->cadastroPost();
            break;
        }
    }

    private function viewFormularioPost(){
        include "views/newPost.php";
    }

    private function viewPosts(){
        include "views/posts.php";
    }

    private function cadastroPost(){
        $post = new Post();
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $caminhoSalvar = "./views/img/$nomeArquivo";
        move_uploaded_file($linkTemp, $caminhoSalvar);
        //if(isset($_SESSION)){
        //    echo('<pre>');
        //     print_r($_SESSION);
        //     echo('</pre>');
        // } else {
        //    echo "oi";
        // }
        // exit;
        $users_id = $_SESSION['fake']['user'][0]['id'];
        // echo ($users_id);
        // exit;
        // var_dump($_SESSION);
        // exit;

        $resultado = $post->criarPost($users_id, $caminhoSalvar, $descricao);

        if($resultado){
            header('Location:/fake-instagram-POO/posts');
        }else {
            //echo "deu errado meu irmão";
            header('Location:/fake-instagram-POO/login');
        }

    }

    private function listarPosts(){
        $post = new Post();
        $listaPosts = $post->listarPosts();
        $_REQUEST['posts'] = $listaPosts;

        // foreach($listarPosts as $post){
        //     $post->retornarUser($post['users_id']);
        // }

        $this->viewPosts();
    }
}