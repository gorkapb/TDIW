<h1>LOG IN</h1>
<div id="div-form">
    <form method = "post" action="index.php?accio=login"> 
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
        <input type="submit" value="Log in" class = 'login-form-button'/>
    </form>	
</div>

<?php if(isset($alert)) {?> 
    <script> warning('<?php echo $alert ?>'); </script> 
<?php } unset($alert);?>


 