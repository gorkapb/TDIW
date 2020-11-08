<ul>
    <li>
        <a href="">HOME</a>
    </li>
<?php foreach ($categories as $category) { ?>
    <li>
        <a href="">
            <?php echo $category["name"] ?> 
        </a>
    </li>
<?php } ?>
</ul>