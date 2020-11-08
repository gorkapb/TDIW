<?php

require_once __DIR__.'/../model/connectBD.php';
require_once __DIR__.'/../model/consultCategories.php';

$connection = connectaBD();
$categories = getCategories($connection);

$connection = null;

include __DIR__.'/../views/categories_list.php';

?>