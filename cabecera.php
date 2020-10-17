<?php
    function Cabecera(){
        
        $cadena{"HOME", "POPULAR", "NEW PRODUCTS", "PLANTS", "ACCESORIES", "CONTACT"};
        
        echo "<ul>";
        for($i=0; $i < strlen($cadena); $i++){
            echo "<li><a href='";
            if($i==0){
                echo "index.php";
            }
            else{
                echo "#" . &cadena[i];
            }
            echo "'>" . &cadena[i] . "</a></li>\n";
        }
        echo "</ul>";
    }
?>
