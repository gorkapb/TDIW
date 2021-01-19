<div id = 'desplegable'>
    <img href='#' src='img/logo_usuario.png' id="logo-usuario"/>
    <div class = "Toggle">
        <?php if (isset($_SESSION['user_id'])) { ?>
            <div class='Toggle-line'><a href="index.php?accio=account">My account</a></div>
            <div class='Toggle-line'><a href="index.php?accio=cart">Cart</a></div>
            <div class='Toggle-line'><a href="/../controller/control_logout.php">Log out</a></div>
        <?php } else{ ?>
            <div class='Toggle-line'><a href="index.php?accio=register">Sign up</a></div>
            <div class='Toggle-line'><a href="index.php?accio=login">Log in</a></div>
        <?php } ?>
    </div>
</div>

