<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
        <title>Sistema de login TNX Systems</title>
    </head>
<body class="bg-dark">
<main class="container mt-4">
    <section class="row">
        <div class="col-lg-4">
        <div class="alert alert-success text-center">
        <strong id="resultado">
            Maravilhoso mundo sem sublime!
        </strong>
        </div>
        </div>
    </section>

    <select class="row">
    <div class"col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
    <h2 class="text-center mt-2">Entrada de sistema</h2>
    <form action="#" id="formLogin" class="p-2">
    <div class="form-group">
    <input type="text" name="nomeUsuário" id="nomeUsuario" class="form-control"
    placeholder="Nome do usuario" required>
    </div>

    <div class="form-group">
    <input type="password" name="senhaUsuario" id="senhaUsuario" class="form-control"
    placeholder="Senha" required>

    </div>

    <div class="form-group">
    <input type="Checkbox" name="lembrar" id="lembrar" class="custom-control-input"
    placeholder="Senha" required>
    <label for="lembrar" class="custom-control-label">
    Lembra de mim
    </label>
    </div>

    <div class="form-group"></div>

    <div class="form-group"></div>
    </form>
    </div>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>