<?php
    function login($connection, $mail, $pw){
        try{
            $SQL = "SELECT email, password FROM users where email= :mail LIMIT 1";
            $consult_login = $connection->prepare($SQL);
        
            $consult_login->bindParam(":mail", $mail, PDO::PARAM_STR); 
            $consult_login->execute();

            $login_result = $consult_login->fetch(PDO::FETCH_ASSOC);
             
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        
        if($login_result != null){
            if(password_verify($pw, $login_result['password'])){
                return $login_result;//VALID
            }else{
                //Mostrar mensaje de error
                return null;//INVALID PASSWORD
            }
        }else{
            return null;//INVALID USER
        }
    }
?>

