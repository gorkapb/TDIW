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
    function searchInSubcart($connection, $id_cart, $product_id) {
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

    //AÑADIR PRODUCTO A SUBCART (PÚBLICA)
    function addProduct($connection, $id_cart, $product_id, $product_name, $product_price, $search) {
        $result_search = true;

        //SI $SEARCH = TRUE, HACE BUSQUEDA EN LA BASE DE DATOS
        if ($search) {
            $result_search = searchInSubcart($connection, $id_cart, $product_id);
        }

        if ($result_search) {
            //EXISTE EL PRODUCT, AUMENTO EN 1 LAS UNIDADES
            $SQL = "UPDATE subcart SET units = (units + 1), price_total = (price_total + $product_price) WHERE id_cart = :id_cart AND product_id = :product_id"; //FUNCIONARÁ LA SUMA ¿?
        } else { 
            //AÑADO EL PRODUCTO, UNIDADES = 1, PRICE = PRICE_TOTAL
            $SQL = "INSERT INTO subcart(id_cart, product_id, price, units, price_total) VALUES (:id_cart, :product_id, $product_price, 1, $product_price)";
        }

        $consult_addProduct = $connection->prepare($SQL);

        $consult_addProduct->bindParam(":id_cart", $id_cart, PDO::PARAM_INT); 
        $consult_addProduct->bindParam(":product_id", $product_id, PDO::PARAM_STR); 
        $consult_addProduct->bindParam(":product_name", $product_name, PDO::PARAM_STR); 
        //$consult_addProduct->bindParam(":product_price", $product_price, PDO::PARAM_FLOAT); //PARAM_FLOAT NO EXISTE, MIRARLO

        $consult_addProduct->execute();
    }

    //RESTA UN ARTICULO (SI TENÍAS 5 AHORA TIENES 4) (PÚBLICA) 
    function releaseUnits($connection, $id_cart, $product_id) {

        $SQL = "UPDATE subcart SET units = (units - 1), price_total = (price_total - $product_price) WHERE id_cart = :id_cart AND product_id = :product_id"; //FUNCIONARÁ LA RESTA ¿?
        $consult_releaseUnits = $connection->prepare($SQL);

        $consult_releaseUnits->bindParam(":id_cart", $id_cart, PDO::PARAM_INT); 
        $consult_releaseUnits->bindParam(":product_id", $product_id, PDO::PARAM_STR); 
        $consult_releaseUnits->bindParam(":product_name", $product_name, PDO::PARAM_STR); 
        //$consult_addProduct->bindParam(":product_price", $product_price, PDO::PARAM_FLOAT); //PARAM_FLOAT NO EXISTE, MIRARLO

        $consult_releaseUnits->execute();
    }

    //BORRA UN ARTÍCULO (DA IGUAL CUANTAS UNIDADES TIENES) (PÚBLICA)
    function deleteProduct($connection, $id_cart, $product_id) {

        $SQL = "DELETE FROM subcart WHERE id_cart = :id_cart AND product_id = :product_id"; //FUNCIONARÁ LA RESTA ¿?
        $consult_deleteProduct = $connection->prepare($SQL);

        $consult_deleteProduct->bindParam(":id_cart", $id_cart, PDO::PARAM_STR); 
        $consult_deleteProduct->bindParam(":product_id", $product_id, PDO::PARAM_INT); 

        $consult_deleteProduct->execute();
    }

    //PONEMOS VARIABLE PAY DE CART = 1 (PORQUE PAGAMOS) (PÚBLICA)
    function payCart($connection, $id_cart) {
        $SQL = "UPDATE cart SET pay = 1 WHERE id_cart = :id_cart";
        $consult_payCart = $connection->prepare($SQL);

        $consult_payCart->bindParam(":id_cart", $id_cart, PDO::PARAM_INT);

        $consult_payCart->execute();
    }

    //PASAR TODOS LOS PRODUCTOS DEL CART (PÚBLICA)
    function getCart($connection, $id_cart) {
        $SQL = "SELECT * FROM subcart WHERE id_cart = $id_cart";
        $consult_getCart = $connection->prepare($SQL);

        $consult_getCart->bindParam(":id_cart", $id_cart, PDO::PARAM_INT);

        $consult_getCart->execute();

        $result_getCart = $consult_getCart->fetch(PDO::FETCH_ASSOC);
        
        return $result_getCart;
    }
?>
