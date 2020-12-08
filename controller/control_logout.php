<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_name']); //$GLOBALS ?
        unset($_SESSION['user_id']);
    }
    header('Location: /../index.php?accio=home');
    exit;
?>