<?php
    function getDetail($connection, $producto){
        
        try{
            $consult_products = $connection->prepare("SELECT * FROM product WHERE id = '" . $producto . "'");
            $consult_products->execute();
            $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        
        return($products_result);
    }
?> 