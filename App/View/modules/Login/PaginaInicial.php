<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Pagina Inicial</title>
</head>
<body>
    <div class="p-3 mb-2 bg-danger text-white" id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/login/auth">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/login/cadastro">Cadastrar</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
    <?php include "./View/includes/js_config.php"; ?>
</body>

</html>