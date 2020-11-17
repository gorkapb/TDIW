<?php

require_once __DIR__.'/../model/connectBD.php';
require_once __DIR__.'/../model/consultDetail.php';

$connection = connectaBD();
$productdetail = getDetail($connection, $_GET['producte']);
$connection = null;

include __DIR__.'/../views/detail_product.php';
?>
