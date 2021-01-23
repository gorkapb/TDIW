
<?php foreach ($products as $producto) { ?>

    <article class="product">
        <div class="product-d" id=<?php echo htmlentities($producto["id"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>>
            <div height=100px> <h2 class = "product-name" ><?php echo htmlentities($producto["name"], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> </h2>  </div>
            <img src= /img/<?php echo htmlentities($producto["image"], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> >
            <h2 class = "product-price" > $<?php echo htmlentities($producto["price"], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> </h2>
        </div>  
        <button class= 'purchase-button' id = '<?php echo htmlentities($producto["id"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-name ='<?php echo htmlentities($producto["name"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-price = '<?php echo htmlentities($producto["price"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-img = <?php echo htmlentities($producto["image"], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> data-quantity ='<?php echo htmlentities(1, ENT_QUOTES | ENT_HTML5, 'UTF-8')?>'>ADD TO CART</button>
    </article>

<?php } ?>
