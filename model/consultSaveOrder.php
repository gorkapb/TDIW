<?php
    function saveOrder($connection,$user_id,$total,$product_id,$amount,$quantity,$product_name){
        //GENERAR ID DE PEDIDO 
        try{
            $SQL = "SELECT MAX(id_cart) as max FROM cart";
            $consult_id = $connection->prepare($SQL);

            $consult_id->execute();
            $max_id = $consult_id->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }

        $cart_id = $max_id['max'] + 1;
        
        //WE GET ACTUAL DATE AND HOUR
        $date_total = getdate();
        $date = strval($date_total['mday']) . "/" . strval($date_total['mon']) . "/" . strval($date_total['year']);
        $time = strval($date_total['hours']) . ":" . strval($date_total['minutes']) . ":" . strval($date_total['seconds']);

        //INSERTAMOS EN CART
        try{
            $SQL = "INSERT INTO cart(user,date,time,id_cart,total) VALUES (:user,:date,:time,:id_cart,:total)";
            $consult_cart = $connection->prepare($SQL);

            $consult_cart->bindParam(":user", $user_id, PDO::PARAM_STR);
            $consult_cart->bindParam(":date", $date, PDO::PARAM_STR);
            $consult_cart->bindParam(":time", $time, PDO::PARAM_STR);
            $consult_cart->bindParam(":id_cart", $cart_id, PDO::PARAM_STR);
            $consult_cart->bindParam(":total", $total, PDO::PARAM_STR);

            $consult_cart->execute();
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        //INSERTAMOS EN SUBCARTS
        try{
            foreach($product_id as $prod) {
                $SQL = "INSERT INTO subcart(id_cart,product_id,amount,quantity,name) VALUES (:id_cart,:product_id,:amount,:quantity,:name)";
                $consult_cart = $connection->prepare($SQL);

                $consult_cart->bindParam(":id_cart", $cart_id, PDO::PARAM_STR);
                $consult_cart->bindParam(":product_id", $prod, PDO::PARAM_STR);
                $consult_cart->bindParam(":amount", $amount[$prod], PDO::PARAM_STR);
                $consult_cart->bindParam(":quantity", $quantity[$prod], PDO::PARAM_INT);
                $consult_cart->bindParam(":name", $product_name[$prod], PDO::PARAM_STR);

                $consult_cart->execute();
            }
            
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
    }
?>