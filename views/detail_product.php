<div class = "container-detail">

    <div class = "product-img" style='grid-area: image'>
        <img src= /img/<?php echo $productdetail[0]["image"]?> >
    </div>

    <div class = "product-name"style='grid-area: name'>
        <h2><?php echo $productdetail[0]["name"]?></h2>
    </div>

    <div class = "product-description"style='grid-area: description'>
        <p> <?php echo $productdetail[0]["description"]?><p>
    </div>

    <div class = "product-price"style='grid-area: price'>
        <h2> $<?php echo $productdetail[0]["price"]?></h2>
    </div>

    <div style='grid-area: purchase'>    
        <button class= 'purchase-button' id = '<?php echo $productdetail[0]["id"]?>' data-name ='<?php echo $productdetail[0]["name"]?>' data-price = '<?php echo $productdetail[0]["price"]?>' data-img =<?php echo $productdetail[0]["image"]?>>ADD TO CART</button> 
    </div>
</div>
 