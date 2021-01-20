<?php 
    /*
    switch ($x){
        case 'email':
            ?><script>alert('Invalit email')</script>;<?php 
            break; 
        case 'password':
            ?><script>alert('Invalit password')</script>;<?php 
            break; 
        default: 
            break;
    }
    */
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){ //SI SE HA RELLENADO EL FORMULARIO, TRATAMOS DATOS
        require_once __DIR__.'/../model/connectBD.php';
        require_once __DIR__.'/../model/consultLogin.php';

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


