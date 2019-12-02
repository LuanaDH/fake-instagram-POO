<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
</head>
<body>

    <main class= "d-flex justify-content-center">
        <div class= "card col-4 p-3">
            <h1>Faça seu cadastro</h1>

        <form action= "cadastrar-user" method= "POST" enctype= "multipart/form-data">

            <label>Nome:</label>
        <input type="text" class="form-control form-control-sm mb-3 name" name="nomeCompl" id="nomeCompl" placeholder= "Escreva seu nome completo" required>
	
	        <label>Email:</label>
        <input type="email" name="email" id="email" class= "form-control form-control-sm mb-3 name" placeholder= "Digite um email valido" required>
			
	        <label>Senha: </label>
        <input type="password" class="form-control form-control-sm mb-3 text" name="senha" id="senha" placeholder="Cadastre uma senha" required>   

            <div class="d-flex justify-content-center">
	            <input type="submit" name="btn" id="btn" value="Cadastrar" class="btn btn-primary" /> 
            </div>    
        </form>

        </div>
    </main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>