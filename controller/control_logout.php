<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_name']); //$GLOBALS ?
        unset($_SESSION['user_id']);
        unset($_SESSION["cart"]);
        unset($_SESSION["name"]);
        unset($_SESSION["quantity"]);
        unset($_SESSION["amount"]);
        unset($_SESSION["total"]);
        header('Location: /../index.php?accio=home');
        exit;
    }