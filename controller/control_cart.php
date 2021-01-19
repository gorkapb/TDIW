<!--  PROVISIONAL !!!!!!!!!!!!!!! -->
<?php  
    if(isset($_GET['add'])||isset($_GET['delete'])||isset($_GET['delete-all'])) session_start();
    // COMPROBAR SESION !!!!!!!!!

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
        }
        
        $_SESSION["total"] = round($_SESSION["total"], 2);

        include __DIR__.'/../views/cart.php';
    }
    else{    
        header('Location: /../index.php?accio=home');
        exit; 
    }
?> 