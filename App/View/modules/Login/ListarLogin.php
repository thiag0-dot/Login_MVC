<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Lista de Usuarios</title>
    
</head>
    <body>
        <center>
            <table class="table table-striped">
                <tr>
                    <th scope="col" > <center>Delete </center></th>
                    <th scope="col">Id</th>
                    <TH scope="col">Nome</TH>
                    <TH scope="col">Email</TH>
                    <TH scope="col">Senha</TH>
                </tr>

                <?php foreach($model->rows as $item): ?>
                    <tr>
                        <td>
                            <center>
                                <a href="/Login/delete?id=<?= $item->id ?>">X</a>
                            </center>
                        </td>

                        <td>
                            <?= $item->id ?>
                        </td>

                        <td>
                            <a href="/Login/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
                        </td>

                        <td>
                            <?= $item->email ?>
                        </td>

                        <td>
                            <?= $item->senha ?>
                        </td>

                    </tr>
                    <?php endforeach ?>

                <?php if(count($model->rows) == 0): ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif ?>
            </table>
        </center>
        <?php include "./View/includes/js_config.php"; ?>
    </body>
</html>