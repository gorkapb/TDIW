<!DOCTYPE html>
<html>
    <head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-cart.css"/>
    </head>
    <body>
        <?php require_once __DIR__.'/resource_base.php' ?> <!-- modificar -->
        

        <div id='layout'>
            <a href='/index.php?accio=home'>🏠 Home</a>    
            <!-- <p style='display=absolute'><?php print_r($_SESSION); ?></p> -->
            <h1>Cart</h1>
            <div id='cart-container'>
                <?php require __DIR__.'/controller/control_cart.php';?>
            </div>
            
        </div>

        
        <?php include __DIR__.'/resource_footer.php';?>
    </body>
</html>                   