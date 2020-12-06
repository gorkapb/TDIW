<!DOCTYPE html>
<html>
	<head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-register-login.css"/>
	</head>
	<body>
        <div id='layout'>
            <section>
                <h1>LOG IN</h1>
                <div id="div-form">
                    <form method = "post" action='/controller/control_login.php?'>
                        <label for="email:">Email:</label>
                        <input type="email" name="email" required=""><br/>
                        <label for="pw">Password:</label>
                        <input type="password" name="pw" required><br/>
                        <input type="submit" value="Log in" />
                    </form>	
                </div>
                <a href="index.php?accio=home">Home</a>
            </section>
        </div>
        <?php include __DIR__.'/resource_footer.php';?>
	</body>
</html>



 