<?php
    function getProducts($connection, $categoria){
        try{

            $consult_products = $connection->prepare("SELECT id, name, category, image, description, price, new_product, popular FROM product WHERE category = $categoria );
            $consult_products->execute();
            $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        return($products_result);
    }
?>