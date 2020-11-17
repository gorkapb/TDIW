<?php
    function register($connection, $name, $email, $password, $address, $town, $cp){

        //Búsqueda por categorias (filas) 
        try{
            $SQL = "INSERT INTO users(name,email,password,address,town,cp) VALUES (:name, :email, :password, :address, :town, :cp)";
            $consult_products = $connection->prepare($SQL);

            $c_pw = password_hash($password,PASSWORD_BCRYPT);

            $consult_products->bindParam(":name", $name, PDO::PARAM_STR); 
            $consult_products->bindParam(":email", $email, PDO::PARAM_STR); 
            $consult_products->bindParam(":password", $c_pw, PDO::PARAM_STR); 
            $consult_products->bindParam(":address", $address, PDO::PARAM_STR); 
            $consult_products->bindParam(":town", $town, PDO::PARAM_STR); 
            $consult_products->bindParam(":cp", $cp, PDO::PARAM_INT);

            $consult_products->execute();
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
    }
?>

