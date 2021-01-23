<form action='index.php?accio=edit-profile' method='post' enctype='multipart/form-data'>

    <label for="email:">Email:</label>
    <input 
        type="email" 
        name="email" 
        value='<?php echo $_SESSION["user_id"]?>' 
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

    <label for="img">Profile Image:</label>
    <input 
        type="file" 
        name="img"  
        required><br/>

    <label for="name">Name:</label>
    <input  
        type="text" 
        name="name" 
        value='<?php echo $_SESSION["user_name"]?>' 
        pattern="[a-zñçA-ZÑÇ ]+"
        title="Name should only contain letters and spaces."
        required><br/>

    <label for="dir">Direction:</label>
    <input 
        type="text" 
        name="dir" 
        value='<?php echo $_SESSION["user_address"]?>'
        pattern="[A-ZÑÇa-zñç0-9\-/ºª ]{1,30}"
        maxlenght="30"
        title="Direction should only contain letters, numbers, -, /, º, ª and spaces. Maximum size is 30"
        required><br/> 

    <label for="town">Town:</label>
    <input 
        type="text" 
        name="town"  
        value='<?php echo $_SESSION["user_town"]?>' 
        pattern="[a-zñçA-ZÑÇ ]{1,30}" 
        maxlenght="30"
        title="Town should only contain letters, numbers, / and spaces. Maximun size is 30"
        required><br/>

    <label for="cp">C.P:</label>	
    <input 
        name="cp"  
        value='<?php echo $_SESSION["user_cp"]?>' 
        pattern="\d*"
        minlength="5"
        maxlength="5" 
        title="C.P's size should be 5"
        required><br/>    

    <input type="submit" value="Save changes" />

</form>