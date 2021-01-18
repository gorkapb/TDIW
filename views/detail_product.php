<div class = "container-detail">

    <div class = "product-img" style='grid-area: image'>
        <img src= /img/<?php echo $productdetail[0]["image"]?> >
    </div>

    <div class = "product-name"style='grid-area: name' id = '<?php echo $productdetail[0]["name"]?>'>
        <h2><?php echo $productdetail[0]["name"]?></h2>
    </div>

    <div class = "product-description"style='grid-area: description'>
        <p> <?php echo $productdetail[0]["description"]?><p>
    </div>

    <div class = "product-price"style='grid-area: price' id = '<?php echo $productdetail[0]["price"]?>'>
        <h2> $<?php echo $productdetail[0]["price"]?></h2>
    </div>

    <div style='grid-area: purchase'>    
        <button class= 'product-purchase' id = '<?php echo $productdetail[0]["id"]?>' onclick='add_to_cart();'>Add to cart</button> 
    </div>
</div>
