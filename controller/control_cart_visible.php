<!--  DEFINITIVO !!!!!!!!!!!!!!! -->
<?php
    if (isset($_SESSION['user_id'])) {
        // ADD
        if(isset($_GET['add'])) {
            $prod = $_GET['add'];
            $name = $_GET['name'];
            $price = $_GET['price'];
            $img = $_GET['img'];
            $quantity = $_GET['quantity'];

            if(!isset($_SESSION["cart"][$prod])) { //Si lo añadimos de 0
                $_SESSION["cart"][$prod] = $prod;
                $_SESSION["name"][$prod] = $name;
                $_SESSION["price"][$prod] = $price;
                $_SESSION["quantity"][$prod] = $quantity;
                $_SESSION["amount"][$prod] = $price * $quantity;;
                $_SESSION["img"][$prod] = $img;
            } 
            else { // Ya tenemos este producto en el carrito 
                $_SESSION["quantity"][$prod] = $_SESSION["quantity"][$prod] + $quantity;
                $_SESSION["amount"][$prod] += $_SESSION["price"][$prod] * $quantity;
            }
            $_SESSION["total"] += $_SESSION["price"][$prod] * $quantity;
            
            $alert = 'product-add-ok';
        }
 
        //LLAMAR A LA VISTA 
        include __DIR__.'/../views/cart_visible.php';  //mandamos $cart(product_id ,product_name, price, price_total, units), $cart_price 
    }
?>
