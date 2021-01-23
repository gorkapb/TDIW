<?php
    if($_SESSION["total"]>0) {
        require_once __DIR__.'/../model/connectBD.php';
        require_once __DIR__.'/../model/consultSaveOrder.php';

        // FILTRAGE??
        $connection = connectaBD(); 
        saveOrder($connection,$_SESSION["user_id"],$_SESSION["total"],$_SESSION["cart"],$_SESSION["amount"],$_SESSION["quantity"],$_SESSION["name"]);


        include __DIR__.'/../views/confirm_order.php';

        unset($_SESSION["name"]);
        unset($_SESSION["quantity"]);
        unset($_SESSION["amount"]);
        unset($_SESSION["price"]);
        unset($_SESSION["cart"]);
        unset($_SESSION["img"]);
        $_SESSION["total"] = 0;
    }
    else include __DIR__.'/../views/confirm_order_empty.php';
?>
