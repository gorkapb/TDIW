
<?php foreach ($products as $producto) { ?>

    <article class="product">
        <div class="product-d" id=<?php echo $producto["id"]?>>   
            <h2 class = "product-name" ><?php echo $producto["name"] ?> </h2>
            <img src= /img/<?php echo $producto["image"] ?> >
            <h2 class = "product-price" > $<?php echo $producto["price"] ?> </h2>
        </div>  
        <button class= 'purchase-button' id = '<?php echo $producto["id"]?>' data-name ='<?php echo $producto["name"]?>' data-price = '<?php echo $producto["price"]?>'>Add to cart</button>
    </article>

<?php } ?>
