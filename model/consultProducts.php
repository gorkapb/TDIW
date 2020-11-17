<?php
    function getProducts($connection, $categoria){

        //Búsqueda por categorias (filas) 
        try{
            $consult_products = $connection->prepare("SELECT id, name, image, price FROM product WHERE category = '" . $categoria . "'");
            $consult_products->execute();
            $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }

        //Búsqueda por booleanos (columnas)
        if($products_result == null){
            try{
                $consult_products = $connection->prepare("SELECT id, name, image, price FROM product WHERE $categoria = '1'");
                $consult_products->execute();
                $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo  "Error: " . $e->getMessage();
            }
        }

        return($products_result);
    }
?>