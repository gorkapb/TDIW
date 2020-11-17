<?php
    header('Location: /../index.php?accio=home');
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultRegister.php'; 

    $connection = connectaBD();
    
    register($connection, $_POST['name'], $_POST['email'], $_POST['pw'], $_POST['dir'], $_POST['town'], $_POST['cp'])

    
?>