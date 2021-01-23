<?php 
    
    define('UPLOADS_PUBLIC_PATH','/files');
    define('UPLOADS_FULL_PATH','/home/TDIW/tdiw-g7/public_html/files');
    session_start();

    $accio = $_GET['accio'] ?? null;
    
    switch ($accio) {
        case 'alert':
            require_once __DIR__.'/resource_alert.php';
            break;  

        case 'base':
            require_once __DIR__.'/resource_base.php';
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
        
        case 'edit-profile':
            require_once __DIR__.'/resource_edit_profile.php';
            break;

        case 'home':
            require_once __DIR__.'/resource_home.php';
            break;

        case 'login':
            require_once __DIR__.'/resource_login.php';
            break;

        case 'logout':
            require_once __DIR__.'/resource_logout.php';
            break;

        case 'my-carts':
            require_once __DIR__.'/resource_my_carts.php';
            break;

        case 'register':
            require_once __DIR__.'/resource_register.php';
            break;

        default:
            require_once __DIR__.'/resource_home.php';
                break;
    }

?>
