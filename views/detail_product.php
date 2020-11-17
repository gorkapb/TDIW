<div id = "container-detail">

    <div id = "product-img" style='grid-area: image'>
        <img src= /img/<?php echo $productdetail[0]["image"]?> >
    </div>

    <div id = "product-name"style='grid-area: name'>
        <h2><?php echo $productdetail[0]["name"]?></h2>
    </div>

    <div id = "product-description"style='grid-area: description'>
        <p> <?php echo $productdetail[0]["description"]?><p>
    </div>

    <div id = "product-price"style='grid-area: price'>
        <h2> $<?php echo $productdetail[0]["price"]?></h2>
    </div>

    <div id= 'product-purchase'style='grid-area: purchase'>    
        <a href="">Purchase</a> 
    </div>
</div>

