<?php 
    
require_once __DIR__.'/resource_base.php';


$accio = $_GET['accio'] ?? null;
 
switch ($accio) {
    /*
    case 'list-products':
        include __DIR__.'/resource_product_list.php';
        break;
    */

    case 'register':
            include __DIR__.'/resource_register.php';
            break;

    case 'login':
        include __DIR__.'/resource_login.php';
        break;

    case 'home':
        include __DIR__.'/resource_home.php';
        break;

    default:
        include __DIR__.'/resource_home.php';
        break;
}

include __DIR__.'/resource_footer.php';

?>
