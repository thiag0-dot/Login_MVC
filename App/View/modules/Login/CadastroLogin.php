<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Cadastro Login</title>
    
</head>

<body>
    <div id="form">
        <form action="/login/save" method="post" >
            <!-- Fazendo o formulario -->

            <div id="cadastro" class="form-floating mb-3">
                <center>
                    <legend>Cadastro de Login</legend>
                    <input type="hidden" value="<?= $model->id ?>" name="id" />
                </center>    
            </div>

            <div id="nome" class="col-12">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div id="email" class="col-12">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div id="senha" class="col-12">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>

            <div id="botao" class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    
    <?php include "./View/includes/js_config.php"; ?>
</body>

</html>