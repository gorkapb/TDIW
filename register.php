<!DOCTYPE html>
<html>
	<head>
		<title>Sign up</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	</head>
	<body>
        <div class='layout'>



            <header class='main-header'>
                <img src='img/logo.png' width='350px'/> 
            </header>
            <nav>
                <div class='nav-menu'>
                    <?php
                        require __DIR__ . "/cabecera.php"
                    ?>
                </div>
            </nav>	          

		
            <!-- REGISTER -->
            <section>
            	<h1>SIGN UP</h1>
				<div class="div-form">
					<form method = "post">
							<label for="name">Name:</label>
							<input type="text" name="name"><br/>
							<label for="email:">Email:</label>
							<input type="email" name="email"><br/>
							<label for="pw">Pasword:</label>
							<input type="password" name="pw"><br/>
							<label for="dir">Direction:</label>
							<input type="text" name="dir" maxlength="30"><br/>
							<label for="town">Town:</label>
							<input type="text" name="town" maxlength="30"><br/>
							<label for="cp">C.P:</label>	
							<input type="number" name="cp"><br/>
							<input type="submit" value="Sign up" />
					</form>	
				</div>
            	<p>Have you already registered?</p>
            	<a href="login.html">Log in</a>
			</section>

			<!-- FIN REGISTER -->

			
		</div>

		<footer>
                <h3>PlantStore&reg 2020-21</h3>
        </footer>
	</body>
</html>