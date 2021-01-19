<?php
    session_start();
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultaccount.php'; 

    $connection = connectaBD();
    $data = getData($connection);
    $connection = null;
    
    
    //header('Location: /../index.php?accio=login');
    exit; 
?> 
