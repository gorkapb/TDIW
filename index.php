<?php 
    
require_once __DIR__.'/resource_base.php';


$accio = $_GET['accio'];
 
switch ($accio = '') {
    case 'llistar-categories':
        include __DIR__.'/resource_llista_categories.php';
        break;

    case 'register':
            include __DIR__.'/resource_register.php';
            break;

    case 'login':
        include __DIR__.'/resource_login.php';
        break;

    default:
        include __DIR__.'/resource_home.php';
        break;
}


require_once __DIR__.'/resource_footer.php';

?>