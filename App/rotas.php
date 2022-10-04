 <?php

 use APP\Controller\LoginController;

 $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

 switch ($url) 
 {
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/':
        echo "Página inicial";
    break;
    
    default:
        echo "ERRO 404";
        break;
 }