<?php
    //header('Location: /../index.php?accio=login');
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultRegister.php'; 
    require_once __DIR__.'/../model/consultIfRegisterBefore.php';

    $filters = filter_input_array( INPUT_POST, 
    [
        'name' => FILTER_DEFAULT,
        'email' => FILTER_VALIDATE_EMAIL,
        'pw' => FILTER_DEFAULT,
        'dir' => FILTER_DEFAULT,
        'town' => FILTER_DEFAULT,
        'cp' => FILTER_VALIDATE_INT,
    ]
    );

    //¿Se puede quitar?
    $name = $filters['name'];
    $email = $filters['email'];
    $password = $filters['pw'];
    $dir = $filters['dir'];
    $town = $filters['town'];
    $cp = $filters['cp'];

    
    //Filtrado
    /*if ($name) {
        $name = htmlentities($name, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        //$name = htmlentities($filters['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

    }
    if ($email) {
        $email = htmlentities($email, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
    if ($password) {
        $password = htmlentities($password, ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
    }
    if ($dir) {
        $dir = htmlentities($dir, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
    if ($town) {
        $town = htmlentities($town, ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
    }
    if ($cp) {
        $cp= htmlentities($cp, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }*/
    

    $connection = connectaBD();

    //Existe el usuario?
    $IamRegister = ifRegisterBefore($connection, $email); //$filters['email'] ¿?

    if ($IamRegister === true) {
        $url = "/../index.php?accio=register";
        ?><script>alert('You are already registered.')</script>;<?php
    } else {
        register($connection, $name, $email, $password, $dir, $town, $cp);
        //register($connection, $filters['name'], $filters['email'], $filters['pw'], $filters['dir'], $filters['town'], $filters['cp']);
        $url = "/../index.php?accio=login";
    }
    header("Refresh: 0; URL=$url");
    exit;
?>