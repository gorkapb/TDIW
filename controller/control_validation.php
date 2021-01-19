<?php
    header('Location: /../index.php?accio=home');
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultLogin.php'; 



    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $isEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $isPw = filter_var($_POST['pw'], FILTER_SANITIZE_STRING);

        $isEmail = filter_var($isEmail, FILTER_VALIDATE_EMAIL) !== false;
        $isPw = filter_var($isPw, FILTER_VALIDATE_STRING) !== false;

        $connection = connectaBD();

        $user = login($connection, $isEmail, $_POST['pw']);//$_POST['email'], $_POST['pw'])

        if($user) { //INICIAMOS SESION
            $_SESSION['user_id'] =  $user['email'];
            print_r($_SESSION); 
        }

        require __DIR__.'/../views/login_result.php';
        return; //QUE HACE ESTE RETURN??
    }   
    //require __DIR__.'/../index.php?accio=login';

?> 