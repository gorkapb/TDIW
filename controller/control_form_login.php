<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){ //SI SE HA RELLENADO EL FORMULARIO, TRATAMOS DATOS
        require_once __DIR__.'/../model/connectBD.php';
        require_once __DIR__.'/../model/consultLogin.php';

        $filters = filter_input_array( INPUT_POST, 
            [
                'email' => FILTER_SANITIZE_EMAIL,
                'pw' => FILTER_SANITIZE_STRING,
            ]
        );

        $email = $filters['email'];
        $password = $filters['pw'];
        
        $connection = connectaBD();

        $user = login($connection, $email, $password);
        
        if ($user == 'login-error-email') {
            $alert = $user;
        }
        elseif ($user == 'login-error-password') {
            $alert = $user;
        }
        else { //INICIAMOS SESION
            $_SESSION['user_id'] =  $user['email'];
            $_SESSION['user_name'] =  $user['name'];
            $_SESSION['user_img'] =  $user['img'];
            $_SESSION['user_address'] =  $user['address'];
            $_SESSION['user_town'] =  $user['town'];
            $_SESSION['user_cp'] =  $user['cp'];
            $_SESSION["total"] = 0;
        }
    }
 
    if (isset($_SESSION['user_id'])) { //SI SE HA INICIADO SESION, (IMPRIMIMOS RESULTADO)
        include __DIR__.'/../views/login_result.php';
    } 
    else{ //SI NO SE HA INICIADO SESION, RESPUESTA AL ENTRAR Y SI FORMULARIO INCORRECTO, (IMPRIMIMOS FORMULARIO)
        include __DIR__.'/../views/login_form.php';
    }
?>

