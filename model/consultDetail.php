<?php
    function getDetail($connection, $producto){     
        try{
            $SQL = "SELECT * FROM product WHERE id = :producto";
            $consult_products = $connection->prepare($SQL);

            $consult_products->bindParam(":producto", $producto, PDO::PARAM_STR); 


            $consult_products->execute();
            $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        
        return($products_result);
    }
?> 