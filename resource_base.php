<!-- configuracion -->

<!DOCTYPE html>       
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>
        <meta charset="utf-8"/>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-base.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
        <script src="js/functions.js"></script>
    </head>
    <body>
        <div id="layout-header"> 

            <header id='main-header'>
                <div id = 'desplegable'>
                    <img href='#' src='img/logo_usuario.png' id="logo-usuario"/>
                    
                    <!-- Require new php within IF for control-->
                    <div class = "Toggle">
                        <ul>
                            <li><a href="index.php?accio=register">Sign up</a></li>
                            <li><a href="index.php?accio=login">Log in</a></li>
                            
                        </ul>
                    </div>
                </div>
                <a href='index.php?accio=home'><img id='logo' src='img/logo.png' width='250px'/></a>
                
                <!-- <a href='index.php?accio=home'><h1>PlantStore</h1></a> -->
            </header>
        </div>
	</body>
</html> 