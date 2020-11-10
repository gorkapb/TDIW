<ul>
    <li>
        <a href= 'index.php?accio=home' >HOME</a>
    </li>
<?php foreach ($categories as $category) { ?>
    <li>
        <a href='index.php?accio=list-products&categoria=<?php echo $category["id"] ?>'>
            <?php echo $category["name"] ?> 
        </a>
    </li>
<?php } ?>
</ul>