<?php

if(isset($_GET['mode'])){
    $mode = $_GET['mode'];
}else{
    $mode = NULL;
}

$url = NULL;

switch($mode){
    case "login":
        $url ='./view/login.php';
        break;
    case "registro":
        $url = './view/registroUsuario.php';
        break;
}


?>