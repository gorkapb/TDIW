<!DOCTYPE html>
<html>
	<head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-register-login.css"/>
	</head>
	<body>
        <?php require_once __DIR__.'/resource_base.php' ?> <!-- modificar -->
        <div id='layout'>
            <section>
                <?php require __DIR__.'/controller/control_order_list.php';?>
            
            </section>
        </div>
        <?php include __DIR__.'/resource_footer.php';?>
	</body>
</html>