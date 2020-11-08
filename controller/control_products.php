<?php

require_once __DIR__.'/../model/connectBD.php';
require_once __DIR__.'/../model/consultProducts.php';

$connection = connectaBD();
$products = getProducts($connection,$category);
$connection = null;

include __DIR__.'/../views/products_list.php';

?>