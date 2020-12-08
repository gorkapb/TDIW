<div id = 'desplegable'>
    <img href='#' src='img/logo_usuario.png' id="logo-usuario"/>
    <div class = "Toggle">
        <ul>
            <?php if (isset($_SESSION['user_id'])) { ?>
                <li><a href="/../views/login_result.php">My account</a></li>
                <li><a href="index.php?accio=home">Cart</a></li>
                <li><a href="/../controller/control_logout.php">Log out</a></li>
            <?php } else{ ?>
                <li><a href="index.php?accio=register">Sign up</a></li>
                <li><a href="index.php?accio=login">Log in</a></li>
            <?php } ?>
        </ul>
    </div>
</div>

