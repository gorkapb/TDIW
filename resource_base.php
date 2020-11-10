<!-- configuracion -->

<!DOCTYPE html>       
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <meta charset="utf-8"/>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <link rel="stylesheet" type="text/css" href="css/style-home.css"/>
    </head>
    <body>
        
           
            <header class='main-header'>
                <div>
                    <a href="index.php?accio=register">Sign up</a>
                    <a href="index.php?accio=login">Log in</a>
                    <a href="contact.php">Contact</a>
                </div>
                <img src='img/logo.png' width='350px'/> 
            </header>

            
            <div class='nav-menu'>
                    <?php require __DIR__.'/controller/control_menu.php'; ?>
            </div>
	</body>
<html>