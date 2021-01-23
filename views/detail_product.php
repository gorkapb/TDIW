<div class = "container-detail">

    <div class = "product-img" style='grid-area: image'>
        <img src= /img/<?php echo htmlentities($productdetail[0]["image"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?> >
    </div>

    <div class = "product-name"style='grid-area: name'>
        <h2><?php echo htmlentities($productdetail[0]["name"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></h2>
    </div>

    <div class = "product-description"style='grid-area: description'>
        <p> <?php echo htmlentities($productdetail[0]["description"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?><p>
    </div>

    <div class = "product-price" style='grid-area: price'>
        <h2> $<?php echo htmlentities($productdetail[0]["price"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></h2>
    </div>

    <div style='grid-area: buttons'>    
        
        <!-- Añadimos unidad producto --->
        <button class= 'quantity-add'  data-quantity= '<?php echo $quantity ?>' data-product= '<?php echo htmlentities($productdetail[0]["id"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>'>+</button>    
        <a> <?php echo $quantity ?></a>

        <!-- Restamos unidad producto --->
        <button class= 'quantity-delete' data-quantity= '<?php echo $quantity ?>' data-product= '<?php echo htmlentities($productdetail[0]["id"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>'>-</button>

    </div>

    <div style='grid-area: purchase'>    
        <button class= 'purchase-button' id = '<?php echo htmlentities($productdetail[0]["id"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-name ='<?php echo htmlentities($productdetail[0]["name"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-price = '<?php echo htmlentities($productdetail[0]["price"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?>' data-img =<?php echo htmlentities($productdetail[0]["image"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?> data-quantity ='<?php echo htmlentities($quantity, ENT_QUOTES | ENT_HTML5, 'UTF-8')?>'>ADD TO CART</button> 
    </div>
</div>

<?php if(isset($alert)) {?> 
    <script> warning('<?php echo $alert ?>'); </script> 
<?php } unset($alert); ?>
 