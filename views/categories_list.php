<div class="list">
<?php foreach ($categories as $category) { ?>
    
    <article class="category">
        <a href='index.php?accio=list-products&categoria=<?php echo $category["id"] ?>'>
            <h2><?php echo $category["name"] ?> </h2>
        </a>
        <a href='index.php?accio=list-products&categoria=<?php echo $category["id"] ?>'>
            <img src= /img/<?php echo $category["image"]?> >
        </a>
    </article>
<?php } ?>
</div>


