
<!--  DEFINITIVO !!!!!!!!!!!!!!! -->
<div id='cabas'>
    <div id='cabas-title'>
        <a href="index.php?accio=cart"><h2>CART</h2></a>
    </div>

    <div id='cabas-list'>   
        <ul>
            <?php if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $prod) { ?>
                <li> 
                    <p><?php echo $_SESSION["name"][$prod] ?></p>
                    <p>x<?php echo $_SESSION["quantity"][$prod] ?></p>
                </li>
            <?php }} ?>
        </ul>
    </div>
    <div id='cabas-price'>
        <p>$<?php echo $_SESSION["total"] ?></p>
    </div>

    <div id='cabas-purchase'>
        <a href="index.php?accio=cart">Purchase</a>
    </div>
</div>

<?php if(isset($alert)) {?> 
    <script> warning('<?php echo $alert ?>'); </script> 
<?php } unset($alert); ?>