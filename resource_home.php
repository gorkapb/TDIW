<!DOCTYPE html>
<html>
    <head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-home.css"/>
    </head>
    <body>
        <div id='nav-menu'>
            <?php require __DIR__.'/controller/control_menu.php'; ?>
        </div>
        
        <div id='layout'>
            <section>
                <?php require __DIR__.'/controller/control_categories.php'; ?>
            </section>
        </div>

        <?php include __DIR__.'/resource_footer.php';?>
    </body>
</html>