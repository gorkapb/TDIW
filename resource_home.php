<!DOCTYPE html>
<html>
    <head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-home.css"/>
    </head>
    <body>
        <?php require_once __DIR__.'/resource_base.php' ?> <!-- modificar -->
    
        <p style='display=absolute'><?php print_r($_SESSION); ?></p>

        <div id='nav-menu'>
            <?php require __DIR__.'/controller/control_menu.php'; ?>
        </div>
        
        <!-- CABAS VISIBLE EN TODO MOMENTO, SOLO CUANDO SE INICIA SESION -->
        <div id=cabas-container> 
            <?php require __DIR__.'/controller/control_cart_visible.php'; ?>
        </div> 
        
        <div id='layout'>
         <section>
                <?php require __DIR__.'/controller/control_categories.php'; ?>
            </section>
        </div>

        <?php include __DIR__.'/resource_footer.php';?>
    </body>
</html>