<ul>
    <li>
        <a href= 'index.php?accio=home' >HOME</a>
    </li>
<?php foreach ($categories as $category) { ?>
    <li id = <?php echo $category["id"] ?> class= 'category-menu'>
        <a>
            <?php echo $category["name"] ?> 
        </a>
    </li>
<?php } ?>
</ul> 