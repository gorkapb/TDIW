<div class="list">
<?php foreach ($categories as $category) { ?>
    
    <article class="category">
        <h2><?php echo $category["name"] ?> </h2>
        <a href='https://www.youtube.com/'>
            <img src=<?php echo $category["image"] ?> >
        </a>
    </article>
<?php } ?>
</div>
