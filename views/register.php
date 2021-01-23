<section>
    <h1>SIGN UP</h1>
    <div id="div-form">
            <form method = "post" action='/index.php?accio=register'>
                <label for="name">Name:</label>
                <input 
                    type="text" 
                    name="name" 
                    placeholder="Name" 
                    pattern="[a-zñçA-ZÑÇ ]+"
                    title="Name should only contain letters and spaces."
                    required><br/>
                
                <label for="email:">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Email" 
                    required><br/>
                
                <label for="pw">Password:</label>
                <input 
                    type="password" 
                    name="pw" 
                    placeholder="Password" 
                    pattern="[A-ZÑÇa-zñç0-9]+"
                    title="Password should only contain letters, numbers and spaces."
                    required><br/>

                <label for="pw">Repeat Password:</label>
                <input 
                    type="password" 
                    name="re_pw" 
                    placeholder="Repeat Password" 
                    pattern="[A-ZÑÇa-zñç0-9]+"
                    title="Password should only contain letters, numbers and spaces."
                    required><br/>

                <label for="dir">Direction:</label>
                <input 
                    type="text" 
                    name="dir" 
                    placeholder="Direction" 
                    pattern="[A-ZÑÇa-zñç0-9\-/ºª ]{1,30}"
                    maxlenght="30"
                    title="Direction should only contain letters, numbers, -, /, º, ª and spaces. Maximum size is 30"
                    required><br/>

                <label for="town">Town:</label>
                <input 
                    type="text" 
                    name="town"  
                    placeholder="Town" 
                    pattern="[a-zñçA-ZÑÇ ]{1,30}" 
                    maxlenght="30"
                    title="Town should only contain letters, numbers, / and spaces. Maximun size is 30"
                    required><br/>

                <label for="cp">C.P:</label>	
                <input 
                    name="cp" 
                    placeholder="C.P"
                    pattern="\d*"
                    minlength="5"
                    maxlength="5" 
                    title="C.P's size should be 5"
                    required><br/>

                <input type="submit" value="Sign up" />
            </form>	
    </div>
    <a href="index.php?accio=home">🏠 Home</a> 
    <p>Have you already registered?</p>
    <a href="index.php?accio=login">Log in</a> 
</section>

<?php if(isset($alert)) {?> 
    <script> warning('<?php echo $alert ?>'); </script> 
<?php } unset($alert);?>