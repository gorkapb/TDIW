f<div id = 'desplegable-cart'>
    <?php if (isset($_SESSION['user_id'])) { ?>
        <img href='#' src='img/logo_usuario.png' id="logo-usuario"/>
            <div class = "Toggle">
                <div class='Toggle-line'><a href="index.php?accio=my-carts">My carts</a></div>
                <div class='Toggle-line'><a href="index.php?accio=cart">Cart</a></div>
            </div>
    <?php } else{ ?>
        <img href="index.php?accio=cart" src='img/logo_usuario.png' id="logo-usuario"/>
    <?php } ?>
</div>

