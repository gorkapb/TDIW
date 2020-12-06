<?php
    // header('Location: /../index.php?accio=home');
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultLogin.php'; 



    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //     $filters = filter_input_array(                                 FILTER
    //         type: INPUT_POST,
    //         [
    //             'email' => FILTER_DEFAULT,

    //         ]
    //     );





        $connection = connectaBD();

        $user = login($connection, $_POST['email'], $_POST['pw']);

        if($user) { //INICIAMOS SESION
            $_SESSION['user_id'] =  $user['email'];
            print_r($_SESSION); 
        }

        require __DIR__.'/../views/login_result.php';
        return; //QUE HACE ESTE RETURN??
    }   
    require __DIR__.'/../index.php?accio=home';

?> 
