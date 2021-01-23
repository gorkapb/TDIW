<div id = 'desplegable'>
    <img href='#' src='img/logo_usuario.png' id="logo-usuario"/>
    <div class = "Toggle">
        <?php if (isset($_SESSION['user_id'])) { ?>
            <div class='Toggle-line'><a href="index.php?accio=edit-profile">Edit profile</a></div>
            <!---<div class='Toggle-line'><a href="index.php?accio=my-carts">My carts</a></div>--->
            <div class='Toggle-line'><a href="index.php?accio=cart">Cart</a></div>
            <div class='Toggle-line'><a href="index.php?accio=logout">Log out</a></div>
        <?php } else{ ?>
            <div class='Toggle-line'><a href="index.php?accio=register">Sign up</a></div>
            <div class='Toggle-line'><a href="index.php?accio=login">Log in</a></div>
        <?php } ?>
    </div>
</div>

