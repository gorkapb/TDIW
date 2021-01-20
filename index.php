<?php 
    
    session_start();

    $accio = $_GET['accio'] ?? null;
    
    switch ($accio) {
        case 'base':
            require_once __DIR__.'/resource_base.php';
            break;

        case 'register':
            require_once __DIR__.'/resource_register.php';
            break;

        case 'login':
            require_once __DIR__.'/resource_login.php';
            break;

        case 'logout':
            require_once __DIR__.'/resource_logout.php';
            break;

        case 'cart':
            require_once __DIR__.'/resource_cart.php';
            break;

        case 'cart-update':
            require_once __DIR__.'/resource_cart_update.php';
            break;

        case 'cart-visible':
            require_once __DIR__.'/resource_cart_visible.php';
            break;

        case 'confirm-order':
            require_once __DIR__.'/resource_confirm_order.php';
            break;

        case 'account':
            require_once __DIR__.'/resourse_account.php';
            break;

        case 'home':
            require_once __DIR__.'/resource_home.php';
            break;

        default:
            require_once __DIR__.'/resource_home.php';
                break;
    }

?>
