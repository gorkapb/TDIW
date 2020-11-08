<?php
    function getCategories($connection){
        try{

            $consult_categories = $connection->prepare("SELECT id, name, image, description FROM category ORDER BY orden");
            $consult_categories->execute();
            $categories_result = $consult_categories->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        return($categories_result);
    }
?>