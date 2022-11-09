<?php

namespace APP\Controller;

use APP\Model\LoginModel;

class LoginController extends Controller
{

    public static function index()
    {
        $model = new LoginModel();
        $model->getAllRows();

        include 'View/modules/Login/ListarLogin.php';
        parent::render('Login/ListarLogin');
    }

    public static function form()
    {
        $model = new LoginModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById((int) $_GET['id']);
        }
        include 'View/modules/Login/CadastroLogin.php';
    }
    public static function auth()
    {
        $model = new LoginModel();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $usuario_logado = $model->autenticar();

        if ($usuario_logado !== null)
        {
            $_SESSION['usuario_logado'] = $usuario_logado;

            header("Location: /");
        }
        else
            header("Location: /login?erro=true");
    }

    public static function logout()
    {
        unset($_SESSION['usuario_logado']);

        parent::isAuthenticated();
    }

    public static function save()
    {
        $Login = new LoginModel();
        $Login->id = $_POST['id'];
        $Login->email = $_POST['email'];
        $Login->senha = $_POST['senha'];
        $Login->save();
        header("Location: /login");
    }

    public static function delete()
    {
        $delete = new LoginModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /login");
    }
}