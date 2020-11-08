<div class="list">
<?php foreach ($products as $product) { ?>
    <article class="category">
        <h2><?php echo $product["name"] ?> </h2>
        <img src=<?php echo $product["image"] ?> >
        <p <?php echo $product["description"] ?> >
    </article>
<?php } ?>
</div>