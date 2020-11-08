<?php
    function connectaBD(){
        $servidor = "localhost";
        $port = "3306";
        $nom = "tdiwg7";
        $usuari = "tdiw-g7";
        $clau = "yaT4iv9T";

        try{
            $connexio = new PDO("mysql:host=$servidor;dbname=$nom;port=$port;charset=utf8mb4",$usuari, $clau);
            $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return($connexio);
    }
?>


