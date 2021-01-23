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
                <?php require __DIR__.'/controller/control_form_login.php';?>
                <a href="index.php?accio=home">🏠 Home</br></br></a>
                <!-- <a href="index.php?accio=my-carts.php">🛒 My carts</br></br></a>
                <a href="index.php?accio=edit-profile.php">😄 Edit profile</br></br></a> -->
            </section>
        </div>
        <?php include __DIR__.'/resource_footer.php';?>
	</body>
</html>



 