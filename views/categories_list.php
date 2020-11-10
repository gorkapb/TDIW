
<div class="list">
<?php foreach ($categories as $category) { ?>
    
    <article class="category">
        <a href='index.php?accio=list-products&categoria=<?php echo $category["id"] ?>'>
            <?php echo $category["name"] ?>
        </a>
        <a href='index.php?accio=list-products&categoria=<?php echo $category["id"] ?>'> 
            <img src= /img/<?php echo $category["image"]?> >
        </a>
    </article>
<?php } ?>
</div>


