<?php 

include_once "Conexao.php";

class Login extends Conexao {
    function loginUser($email){
        $db = parent::criarConexao();
        $query = $db->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute([$email]);
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
      

    }
}

?>