<?php
   
    $loginUser = isset($_SESSION["fake"]["user"][0]["nomeCompl"]) ? $_SESSION["fake"]["user"][0]["nomeCompl"]:[];
    // var_dump($loginUser);
    // exit;
   
?>

<header>
        <nav class="navbar topo-instagran justify-content-center">
            <a class="navbar-brand" href="/fake-instagram-POO/"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>

            <?php
            if($loginUser){ ?>
            <div class= "d-flex mt-3">
                <p><?php echo "Olá, ".$loginUser; ?></p>
            </div>
            <div class= "d-flex ml-3">     
                <a href="/fake-instagram-POO/logout.php" type="submit" class="btn btn-primary">Logout</a>
            </div>    
            <?php }else{ ?>
                    <a href="/fake-instagram-POO/cadastro.php">Cadastre-se</a>
                    <a href="/fake-instagram-POO/login.php">Login</a>
                <?php } ?>

        </nav>
</header>