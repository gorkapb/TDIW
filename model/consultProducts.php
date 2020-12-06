<?php
    function getProducts($connection, $categoria){

        //Búsqueda por categorias (filas) 
        try{
            $SQL = "SELECT id, name, image, price FROM product WHERE category = :categoria ";
            $consult_products = $connection->prepare($SQL);

            $consult_products->bindParam(":categoria", $categoria, PDO::PARAM_STR); 

            $consult_products->execute();
            $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }

        //HARDCODEADO? BUSCAR MEJOR FORMA 
        if($products_result == null){
            if($categoria == 'new_products'){
                try{
                    $SQL = "SELECT id, name, image, price FROM product WHERE new_products=1";
                    $consult_products = $connection->prepare($SQL);
                    $consult_products->execute();
                    $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
                }catch(PDOException $e){
                    echo  "Error: " . $e->getMessage();
                }
            }
            elseif($categoria == 'popular'){
                try{
                    $SQL = "SELECT id, name, image, price FROM product WHERE popular=1";
                    $consult_products = $connection->prepare($SQL);
                    $consult_products->execute();
                    $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
                }catch(PDOException $e){
                    echo  "Error: " . $e->getMessage();
                }               
            }
        }

        return($products_result);
    }
?>