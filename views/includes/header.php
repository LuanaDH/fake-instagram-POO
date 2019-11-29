<?php
   
    $loginUser = isset($_SESSION["loginUser"]) ? $_SESSION["loginUser"][0]:[];
   
?>

<header>
        <nav class="navbar topo-instagran justify-content-center">
            <a class="navbar-brand" href="/fake-instagram-POO/"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>

            <?php
            if($loginUser){ ?>
                <p><?php echo "Olá, ".$loginUser; ?></p>
                <a href="/fake-instagram-POO/logout">Sair</a>
            <?php }else{ ?>
                    <a href="/fake-instagram-POO/cadastro">Cadastre-se</a>
                    <a href="/fake-instagram-POO/login">Login</a>
                <?php } ?>
        </nav>
</header>