<?php 
    
    session_start();

    require_once __DIR__.'/resource_base.php';


    $accio = $_GET['accio'] ?? null;
    
    switch ($accio) {
        case 'register':
                include __DIR__.'/resource_register.php';
                break;

        case 'login':
                include __DIR__.'/resource_login.php';
                break;

        case 'cart':
            include __DIR__.'/resource_cart.php';
            break;

        case 'account':
            include __DIR__.'/resourse_account.php';
            break;

        case 'home':
            include __DIR__.'/resource_home.php';
            break;

        default:
            include __DIR__.'/resource_home.php';
            break;
    }

?>
