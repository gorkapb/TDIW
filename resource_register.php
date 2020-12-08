<!DOCTYPE html>
<html>
        <head>
                <title>PlantStore</title>
                <link rel="stylesheet" type="text/css" href="css/style-register-login.css"/>
        </head>
	<body>
                <div id='layout'>
                        <section>
                                <h1>SIGN UP</h1>
                                <div id="div-form">
                                        <form method = "post" action='/controller/control_register.php?'>
                                                <label for="name">Name:</label>
                                                <input type="text" name="name" required><br/>
                                                <label for="email:">Email:</label>
                                                <input type="email" name="email" required><br/>
                                                <label for="pw">Password:</label>
                                                <input type="password" name="pw" required><br/>
                                                <label for="dir">Direction:</label>
                                                <input type="text" name="dir" maxlength="30" required><br/>
                                                <label for="town">Town:</label>
                                                <input type="text" name="town" maxlength="30" required><br/>
                                                <label for="cp">C.P:</label>	
                                                <input type="number" name="cp" required ˆ\d{5}$><br/>
                                                <input type="submit" value="Sign up" />
                                        </form>	
                                </div>
                                <a href="index.php?accio=home">Home</a>
                                <a href="index.php?accio=login">Have you already registered?</a>
                                <a href="index.php?accio=login">Log in</a>
                        </section>
                </div>
                <?php include __DIR__.'/resource_footer.php';?>  
	</body>
</html>

