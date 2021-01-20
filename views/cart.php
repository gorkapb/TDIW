
<div id='cart'> 

    <div id='cart-list' style= 'grid-area: cart-list'>  <!-- Lista de productos --->
        <?php if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $i) { ?>
            <div class='product-cart'> <!-- Producto dentro del carro --->

               <div  style='grid-area: image' class = 'product-cart-image'><img src= /img/<?php echo $_SESSION['img'][$i] ?>></div> 
                
                <div  style='grid-area: product-name' class = 'product-cart-name'><h2><?php echo $_SESSION['name'][$i] ?></h2></div> 

                <div  style='grid-area: product-price' class = 'product-cart-price'><p>$<?php echo $_SESSION['amount'][$i] ?></p></div>

                <div  style='grid-area: product-quantity' class = 'product-cart-quantity'>

                    <!-- Añadimos unidad producto --->
                    <button class= 'product-add' id = '<?php echo $_SESSION["cart"][$i]?>'>+</button>    
                    <a> <?php echo $_SESSION['quantity'][$i] ?></a>

                    <!-- Restamos unidad producto --->
                    <button class= 'product-delete' id = '<?php echo $_SESSION["cart"][$i]?>'>-</button>

                    <!-- Restamos todas las unidades de un producto --->
                    <button class= 'product-delete-all' id = '<?php echo $_SESSION["cart"][$i]?>'>x</button>
                </div>
            </div> 
        <?php }} ?> 
    </div>

    <div id ='cart-total-price' style='grid-area: cart-price'>
        <h2>TOTAL: $<?php echo $_SESSION["total"]?></h2>
    </div>

    <div id ='delete-all' style='grid-area: delete-all'>
        <button class = 'cart-button' id= 'delete-all'>EMPTY THE CART!</button>
    </div>

    <div id ='cabas-purchase' style='grid-area: cart-purchase'>
        <button class = 'cart-button' id= 'product-purchase'>BUY NOW!</button>
    </div>

</div> 