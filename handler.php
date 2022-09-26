<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/Vista/Usuario/CrearUsuario.php':
        require '/Vista/Usuario/CrearUsuario.php';
        break;
    case '/pepe':
        require 'pepe.php';
        break;
    case '/CrearUsuario':
        require 'CrearUsuario.php';
        break;
    case '/LoginUsuario':
        require 'LoginUsuario.php';
        break; 
    case '/CatalogoC':
        require 'CatalogoC.php';
        break;  
    case '/index1':
        require 'index1.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
?>