<?php
    $type = $_GET['type'];

    switch ($type) {
        case 'product-add-error':
            $text = 'Product not added.';
            $color = 'red';
            break;

        case 'product-add-ok':
            $text = 'Product added properly.';
            $color = 'green';
            break;
            
        case 'register-error-cp':
            $text = 'C.P is not a integer number.';
            $color = 'red';
            break;

        case 'register-error-email':
            $text = 'You are already registered.';
            $color = 'red';
            break;
        
        case 'register-error-password':
            $text = "Passwords introduced don't match.";
            $color = 'red';
            break;
        
        case 'login-error-email':
            $text = "Mail not registered yet. Please try again.";
            $color = 'red';
            break;

        case 'login-error-password':
            $text = 'Wrong password! Please try again.';
            $color = 'red';
            break;

        case 'quantity-product-error':
            $text = 'Quantity minimun requiered.';
            $color = 'red';
            break;
    }

    include __DIR__.'/../views/alert.php';
?> 
 