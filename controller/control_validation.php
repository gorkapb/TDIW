<?php
    header('Location: /../index.php?accio=home');
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultLogin.php'; 



    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //     $filters = filter_input_array(                                 FILTER
    //         type: INPUT_POST,
    //         [
    //             'email' => FILTER_DEFAULT,

    //         ]
    //     );


        $isEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false;
        //$isPw = filter_var($_POST['pw'], FILTER_VALIDATE_EMAIL) !== false; //¿Tipo de validación?

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