<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
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

		 	
            <!-- LOGIN -->
            <section>
            	<h1>LOG IN</h1>
            	<div class="div-form">
					<form method = "post">
							<label for="name">Name:</label>
							<input type="text" name="name"><br/>
							<label for="email:">Email:</label>
							<input type="email" name="email"><br/>
							<input type="submit" value="Log in" />
					</form>	
				</div>
            </section>
			


			<!-- FIN LOGIN -->


		</div>

		<footer>
                <h3>PlantStore&reg 2020-21</h3>
        </footer>
	</body>
</html>
