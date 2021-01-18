
<?php foreach ($products as $producto) { ?>

    <article class="product">
        <div class= 'product-d' id=<?php echo $producto["id"]?> >
            <h2 class = "product-name" id = '<?php echo $producto["name"]?>'><?php echo $producto["name"] ?> </h2>
            <img src= /img/<?php echo $producto["image"] ?> >
            <h2 class = "product-price" id = '<?php echo $producto["price"]?>'> $<?php echo $producto["price"] ?> </h2>
        </div>
        <button class= 'product-purchase' id = '<?php echo $producto["id"]?>' onclick='add_to_cart();'>Add to cart</button>
    </article>

<?php } ?>
