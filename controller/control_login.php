<?php
    session_start();
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultLogin.php'; 



    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $filters = filter_input_array( INPUT_POST, 
            [
                'email' => FILTER_VALIDATE_EMAIL,
                'pw' => FILTER_DEFAULT,
            ]
        );

        $email = $filters['email'];
        $password = $filters['pw'];
    
        //FILTRADO
        /*if ($email) {
            $email = htmlentities($email, ENT_QUOTES | ENT_HTML5 , 'UTF-8');
        }
        if ($password) {
            $password = htmlentities($password, ENT_QUOTES | ENT_HTML5 , 'UTF-8'); // | ENT_HTML5 ?
        }*/
        
        $connection = connectaBD();

        $user = login($connection, $email, $password);
        if($user) { //INICIAMOS SESION
            $_SESSION['user_id'] =  $user['email'];
            $_SESSION['user_name'] =  $user['name'];
        }
    }  
    header('Location: /../index.php?accio=login');
    exit; 
?> 
