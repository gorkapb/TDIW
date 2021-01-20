<?php
    if($_SESSION["total"]>0) {
        #guardar en la base de datos 

        include __DIR__.'/../views/confirm_order.php';

        unset($_SESSION["name"]);
        unset($_SESSION["quantity"]);
        unset($_SESSION["amount"]);
        unset($_SESSION["price"]);
        unset($_SESSION["cart"]);
        $_SESSION["total"] = 0;
    }
    else include __DIR__.'/../views/confirm_order_empty.php';
?>
