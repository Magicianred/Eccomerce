<?php include './lib/setup-site.php';

$mercantiba->setData();
?>

<html>

<head></head>

<body>
    <date>
        <?php echo $mercantiba->getData() . " " . $mercantiba->getHora(); ?><date>
            <h1><?php echo $mercantiba->getNome(); ?>- Ecommerce - System
            </h1>

            <menu>
                <a href="./view/novoUsuario.php">Registrar-se</a>
            </menu>


            <body>


</html>