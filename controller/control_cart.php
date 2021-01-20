<?php  
    if (isset($_SESSION['user_id'])) {
        // afegim unitat producte
        if(isset($_GET['add'])) { 
            $prod = $_GET['add'];

            $_SESSION["quantity"][$prod] = $_SESSION["quantity"][$prod] + 1;
            $_SESSION["amount"][$prod] += $_SESSION["price"][$prod];
            $_SESSION["total"] += $_SESSION["price"][$prod];

        }
        // eliminem unitat producte
        elseif(isset($_GET['delete'])){ 
            $prod = $_GET['delete'];
            $_SESSION["total"] -= $_SESSION["price"][$prod];

            if ($_SESSION["quantity"][$prod] > 1) {
                
                $_SESSION["quantity"][$prod] -= 1;
                $_SESSION["amount"][$prod] -= $_SESSION["price"][$prod];

            }
            else {
                unset($_SESSION["cart"][$prod]);
                unset($_SESSION["name"][$prod]);
                unset($_SESSION["price"][$prod]);
                unset($_SESSION["quantity"][$prod]);
                unset($_SESSION["amount"][$prod]);  
                unset($_SESSION["img"][$prod]);  
            }
        }
        // eliminem totes les unitats de un productes
        elseif(isset($_GET['delete-all'])){
            $prod = $_GET['delete-all'];
            $_SESSION["total"] -= $_SESSION["amount"][$prod];
            
            unset($_SESSION["cart"][$prod]);
            unset($_SESSION["name"][$prod]);
            unset($_SESSION["price"][$prod]);
            unset($_SESSION["quantity"][$prod]);
            unset($_SESSION["amount"][$prod]);
            unset($_SESSION["img"][$prod]);   
        }
        // eliminem tot el cabas
        elseif(isset($_GET['delete-cart'])){
            $_SESSION["total"] = 0;
            
            unset($_SESSION["cart"]);
            unset($_SESSION["name"]);
            unset($_SESSION["price"]);
            unset($_SESSION["quantity"]);
            unset($_SESSION["amount"]);
            unset($_SESSION["img"]);   
        }

        $_SESSION["total"] = round($_SESSION["total"], 2);

        include __DIR__.'/../views/cart.php';
    }
    else{    
        header('Location: /../index.php?accio=home');
        exit; 
    }
?> 