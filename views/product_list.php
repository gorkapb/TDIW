<div class="list">
<?php foreach ($products as $product) { ?>
    <article class="product">
        <h2><?php echo $product["name"] ?> </h2>
        <img src= /img/<?php echo $product["image"] ?> >
        <h2> $<?php echo $product["price"] ?> </h2>
    </article>
<?php } ?>
</div>