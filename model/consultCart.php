<?php 
    //ABRIMOS CARRO, SI NO HAY ABIERTO LO CREAMOS; DEVUELE CART ID (PÚBLICA)
    function openCart($connection, $user){
        try{
            $SQL = "SELECT id_cart FROM cart WHERE user = :user AND pay = 0 LIMIT 1";
            $consult_openCart = $connection->prepare($SQL);
        
            $consult_openCart->bindParam(":user", $user, PDO::PARAM_STR);

            $consult_openCart->execute();

            $result_openCart = $consult_openCart->fetch(PDO::FETCH_ASSOC);
             
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        
        if ($result_openCart) { //DEVUELVE ID CARRO ABIERTO 
            return $result_openCart;
        } else { //CREAMOS CARRO Y DEVOLVEMOS ID 
            return createCart($connection, $user);
        }
    }
    
    //CREAMOS CART (PRIVADA)
    function createCart($connection, $user){
        try {
            $id_cart = createCartId($connection); //CREAMOS ID CARRO 

            $SQL = "INSERT INTO cart(user, id_cart, pay) VALUES (:user, :id_cart, 0)";
            $consult_createCart = $connection->prepare($SQL);

            $consult_createCart->bindParam(":user", $user, PDO::PARAM_STR); 
            $consult_createCart->bindParam(":id_cart", $id_cart, PDO::PARAM_INT);

            $consult_createCart->execute();
             
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
    }
    
    //CREAMOS ID CARRO (PRIVADA)
    function createCartId($connection, $id_cart) { 
        do {
            $num = random_int(0, 4294967295);
        } while (searchCartbyId($connection, $num) === false); //BUSCAMOS SI EL ID CREADO EXISTE

        return $num;
    }

    //BUSCAMOS SI EL ID CREADO EXISTE (PRIVADA)
    function searchCartbyId($connection, $id_cart) {
        try{
            $SQL = "SELECT id_cart FROM cart WHERE id_cart = $id_cart LIMIT 1";
            $consult_searchCart = $connection->prepare($SQL);
            
            $consult_createCart->bindParam(":id_cart", $id_cart, PDO::PARAM_STR);
            $consult_createCart->bindParam(":user", $user, PDO::PARAM_STR);

            $consult_searchCart->execute();

            $result_searchCart = $consult_searchCart->fetch(PDO::FETCH_ASSOC);
             
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }

        if ($result_searchCart) {
            return false;
        } else {
            return true;
        }
    }
    
    //BUSCAR UN PRODUCTO EN EL SUBCART (PRIVADA)
    function searchInSubcart($connection, $id_cart, $product_id, $product_price) {
        try{
            $SQL = "SELECT * FROM subcart WHERE id_cart = $id_cart AND product_id = $product_id LIMIT 1";
            $consult_searchSubcart = $connection->prepare($SQL);
        
            $consult_searchSubcart->execute();

            $result_searchSubcart = $consult_searchSubcart->fetch(PDO::FETCH_ASSOC);
             
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }

        return $result_searchSubcart;
    }


    function addProduct($connection, $id_cart, $product_id, $product_price, $search) {
        $result_search = true;

        if ($search) {
            $result_search = searchInSubcart($connection, $id_cart, $product_id, $product_price);
        }

        if ($result_search) {
            //EXISTE EL PRODUCT, AUMENTO EN 1 LAS UNIDADES

            $SQL = "INSERT INTO cart(user, id_cart, pay) VALUES (:user, :id_cart, 0)";
            $consult_addProduct = $connection->prepare($SQL);


        } else { 
            //AÑADO EL PRODUCTO, UNIDADES = 1, PRICE = PRICE_TOTAL

        }

        $consult_addProduct->bindParam(":id_cart", $id_cart, PDO::PARAM_STR); 
        $consult_addProduct->bindParam(":product_id", $product_id, PDO::PARAM_INT); 
        $consult_addProduct->bindParam(":product_price", $product_price, PDO::PARAM_INT);

        $consult_addProduct->execute();
    }

    //Resta un articulo (si tenias 5 ahora tienes 4)
    function releaseUnits($connection, $id_cart, $product_name){
    }

    //Borra un articulo (da igual cuantas unidades tienes)
    function deleateProduct($connection, $id_cart, $product_name){
    }

    //Ponemos variable pay de cart = 1
    function payCart($connection, $id_cart){
    }

    //BORRAR!!
    function Function($connection, $email, $pw){
        try{
            $SQL = "SELECT name, email, password FROM users WHERE email= :mail LIMIT 1";
            $consult_login = $connection->prepare($SQL);
        
            $consult_login->bindParam(":mail", $mail, PDO::PARAM_STR); 
            $consult_login->execute();

            $login_result = $consult_login->fetch(PDO::FETCH_ASSOC);
             
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        
        if($login_result != null){
            if(password_verify($pw, $login_result['password'])){
                return $login_result;//VALID
            }else{
                //Mostrar mensaje de error
                return null;//INVALID PASSWORD
            }
        }else{
            return null;//INVALID USER
        }
    }
?>
