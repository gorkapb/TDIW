<div id='cabas'>
    <div id='cabas-title'>
        <a href="index.php?accio=cart"><h2>CART</h2></a>
    </div>

    <div id='cabas-list'>   <!-- mandamos $cart(product_id ,product_name, price, price_total, units), $cart_price  -->
        <ul>
            <?php foreach ($cart as $subcart) { ?>
                <li> 
                    <p><?php echo $subcart["product_name"] ?></p>
                    <p>x<?php echo $subcart["units"] ?></p>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div id='cabas-price'>
        <p>$<?php $cart_price ?></p>
    </div>

    <div id='cabas-purchase'>
        <a>Purchase</a>
    </div>
</div>
