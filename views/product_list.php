
<?php foreach ($products as $producto) { ?>

    <article class="product" id=<?php echo $producto["id"] ?>>
        <h2><?php echo $producto["name"] ?> </h2>
        <img src= /img/<?php echo $producto["image"] ?> >
        <h2> $<?php echo $producto["price"] ?> </h2>
    </article>

<?php } ?>
