<?php
    function getProducts($connection, $categoria){

        //Búsqueda por categorias (filas) 
        try{
            $SQL = "SELECT * FROM user WHERE email = :email ";
            $consult_products = $connection->prepare($SQL);

            $consult_products->bindParam(":enail", $email, PDO::PARAM_STR); 

            $consult_products->execute();
            $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }

        return($products_result);
    }
?>