<?php
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);
        unset($_SESSION['user_img']);
        unset($_SESSION['user_address']);
        unset($_SESSION['user_town']);
        unset($_SESSION['user_cp']);
        unset($_SESSION["cart"]);
        unset($_SESSION["name"]);
        unset($_SESSION["quantity"]);
        unset($_SESSION["amount"]);
        unset($_SESSION["price"]);
        unset($_SESSION["img"]);
        unset($_SESSION["total"]);
        header('Location: /../index.php?accio=home');
        exit;
    }