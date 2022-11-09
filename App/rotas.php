 <?php

 use APP\Controller\LoginController;
use APP\DAO\LoginDAO;

 $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

 switch ($url) 
 {
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/login/delete':
        LoginController::delete();
    break;

    case '/login/save':
        LoginController::save();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/login/cadastro':
        LoginController::form();
    break;

    case '/':
        include 'View/modules/Login/PaginaInicial.php';
    break;
    
    default:
        echo "ERRO 404";
        break;
 }