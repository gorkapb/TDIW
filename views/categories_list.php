
<div class="list">
<?php foreach ($categories as $category) { ?>
    
    <article class= "category" id=<?php echo $category["id"] ?>> 
        <a><?php echo $category["name"] ?></a>
        <img src= /img/<?php echo $category["image"]?> >
    </article>
    
<?php } ?>
</div>

