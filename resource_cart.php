<!DOCTYPE html>
<html>
    <head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-cart.css"/>
    </head>
    <body>
        <p style='display=absolute'><?php print_r($_SESSION); ?></p>

        <div id='layout'>
            <h1>Cart</h1>
            <div id='cart-container'>
                <div id='cart-product-list'>
                    <?php require __DIR__.'/controller/control_cabas_visible.php';?>
                    <!---
                    <?php //if(isset($_SESSION["cart"])) { foreach ($_SESSION["cart"] as $prod) { ?>

                    <div id='cart-product'>
                        <div  style='grid-area: image'></div>
                        <div  style='grid-area: name'><h2>PLANTA</h2></div>
                        <div  style='grid-area: price'><p>$35</p></div>
                        <div  style='grid-area: adds'><p>+ 1 -</p></div>

                    </div> --->
                </div>
            </div>
                

        </div>

        <?php include __DIR__.'/resource_footer.php';?>
    </body>
</html>