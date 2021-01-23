
<div class="list">
<?php foreach ($categories as $category) { ?>
    
    <article class= "category" id=<?php echo htmlentities($category["id"], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>> 
        <!--<a><?php // echo $category["name"] ?></a> --->
        <a><?php echo htmlentities($category["name"], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></a>
        <img src= /img/<?php echo htmlentities($category["image"], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> >
    </article>
    
<?php } ?>
</div>

