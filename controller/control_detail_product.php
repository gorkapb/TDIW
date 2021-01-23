<?php

require_once __DIR__.'/../model/connectBD.php';
require_once __DIR__.'/../model/consultDetail.php';

$connection = connectaBD();
$productdetail = getDetail($connection, $_GET['producte']);
$connection = null;

if (isset($_GET['add'])) {// afegim unitat producte
    $quantity = $_GET["add"] + 1;
}        
// eliminem unitat producte
elseif (isset($_GET['delete'])){ 
    if ($_GET['delete'] > 1) {
        $quantity = $_GET['delete'] - 1;
    }
    else { 
        $alert = 'quantity-product-error';
        $quantity = 1;
    }
}    
else {
    $quantity = 1;
}


include __DIR__.'/../views/detail_product.php';
?>
