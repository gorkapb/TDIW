<?php

require_once __DIR__.'/../model/connectBD.php';
require_once __DIR__.'/../model/consultProducts.php';

$connection = connectaBD();
$products = getProducts($connection, $_GET['categoria']);
$connection = null;

include __DIR__.'/../views/product_list.php';

?>



