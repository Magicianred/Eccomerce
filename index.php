<?php 

include './lib/setup-site.php'; $mercantiba->setData();
include './controller/inicio.php';

?>

<html>

<head></head>

<body>
    <date>
        <?php echo $mercantiba->getData() . " " . $mercantiba->getHora(); ?><date>
            <h1><?php echo $mercantiba->getNome(); ?>- Ecommerce - System
            </h1>

            <menu>
                <a href="./?mode=registro">Registrar-se</a>
                <a href="./?mode=login">Login</a>
            </menu>

            <article>
              <?php  
                if($url != NULL){
                    require $url;
                }
                
              ?>
            </article>

            <body>


</html>