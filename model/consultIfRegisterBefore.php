<?php
    function ifRegisterBefore($connection, $mail){
        try{
            $SQL = "SELECT email FROM users WHERE email = :mail LIMIT 1";
            $consult_login = $connection->prepare($SQL);
        
            $consult_login->bindParam(":mail", $mail, PDO::PARAM_STR); 
            $consult_login->execute();

            $login_result = $consult_login->fetch(PDO::FETCH_ASSOC);
             
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        
        if($login_result != null){
            return true;
        }else{
            return false;
        }
    }
?>

