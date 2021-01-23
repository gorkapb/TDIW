<ul>
    <li>
        <a href= 'index.php?accio=home' >HOME</a>
    </li>
<?php foreach ($categories as $category) { ?>
    <li id = <?php echo htmlentities($category["id"], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> class= 'category-menu'>
        <a>
            <?php echo htmlentities($category["name"], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> 
        </a>
    </li>
<?php } ?>
</ul> 