<?php
    if (isset($_SESSION['user_id'])) {
        require_once __DIR__.'/../model/connectBD.php';
        require_once __DIR__.'/../model/consultCart.php';

        //VARIABLES
        $connection = connectaBD();
        $cart_id = $_SESSION['cart_id']; 
        $product_id = $_GET['product_id'];
        $product_price = $_GET['product_price'];
        
        
        if($_GET['accio']=='add'){ //AÑADIR PRODUCTO 
            addProduct($connection, $cart_id, $product_id, $product_name, $product_price, $search);
        }
        elseif($_GET['accio']=='remove'){ //ELIMINAR PRODUCTO CON GET
            removeProduct($connection, $id_cart, $product_id);
        }
        
        //CONSULTA PRODUCTOS, PRECIO, ETC
        $cart = getCart($connection, $id_cart);

        //CALCULAR PRECIO TOTAL DEL CARRO
        $cart_price = 0;
        foreach ($cart as $subcart){
            $cart_price += $cart['price_total'];
        }

        //LLAMAR A LA VISTA 
        include __DIR__.'/../views/cart_visible.php';  //mandamos $cart(product_id ,product_name, price, price_total, units), $cart_price 
    }
?>